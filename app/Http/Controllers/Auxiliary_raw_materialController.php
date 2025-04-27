<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auxiliary_raw_materials;
use Illuminate\Support\Facades\Validator;

class Auxiliary_raw_materialController extends Controller
{
    function index()
    {
        $auxiliary_raw_materials = Auxiliary_raw_materials::all();
        return view('masters.auxiliary_raw_materials', ['auxiliary_raw_materials' => $auxiliary_raw_materials]);
    }

    function show()
    {
        $auxiliary_raw_materials = Auxiliary_raw_materials::all();
        return view('masters.auxiliary_raw_materials.create', ['auxiliary_raw_materials' => $auxiliary_raw_materials]);
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'auxiliary_raw_material_display_flg' => 'boolean',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'auxiliary_raw_material_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];
        $auxiliary_raw_materials = Validator::make($request->all(), $rules, $message);
        if ($auxiliary_raw_materials->fails()) {
            return redirect('/masters/auxiliary_raw_materials/create')
                ->withErrors($auxiliary_raw_materials)
                ->withInput();
        } else {
            $post = new Auxiliary_raw_materials();
            $post->name = $request->name;
            $post->maker = $request->maker;
            $post->auxiliary_raw_material_display_flg = 1;
            $post->save();
            return view('masters.auxiliary_raw_materials.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $auxiliary_raw_material = Auxiliary_raw_materials::findOrFail($id);
        return view('masters.auxiliary_raw_materials.edit', ['auxiliary_raw_materials' =>  $auxiliary_raw_material,]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'auxiliary_raw_material_display_flg' => 'boolean',
        ];

        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'auxiliary_raw_material_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];

        $auxiliary_raw_material = Validator::make($request->all(), $rules, $message);
        if ($auxiliary_raw_material->fails()) {
            return redirect('masters.auxiliary_raw_materials.create')
                ->withErrors($auxiliary_raw_material)
                ->withInput();
        } else {
            $auxiliary_raw_material = Auxiliary_raw_materials::findOrFail($id);
            $auxiliary_raw_material->name = $request->name;
            $auxiliary_raw_material->maker = $request->maker;
            $auxiliary_raw_material->auxiliary_raw_material_display_flg = $request->auxiliary_raw_material_display_flg;
            $auxiliary_raw_material->save();
            return view('masters.auxiliary_raw_materials.create', ['msg' => '正しく入力されました']);
        }
    }


    function delete($id, Request $request)
    {
        $db_data = new Auxiliary_raw_materials;
        $db_data->destroy(1);
    }
}


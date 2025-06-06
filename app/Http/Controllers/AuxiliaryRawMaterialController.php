<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuxiliaryRawMaterial;
use Illuminate\Support\Facades\Validator;

class AuxiliaryRawMaterialController extends Controller
{
    public function index()
    {
        $auxiliary_raw_materials = AuxiliaryRawMaterial::all();
        return view('masters.auxiliary_raw_materials.index', compact('auxiliary_raw_materials'));
    }

    public function show()
    {
        return view('masters.auxiliary_raw_materials.create');
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'auxiliary_raw_material_display_flg' => 'boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'maker.required' => 'メーカーは必須です',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];        

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/master/auxiliary_raw_materials/create')
                ->withErrors($validator)
                ->withInput();
        }

        AuxiliaryRawMaterial::create([
            'name' => $request->name,
            'maker' => $request->maker,
            'auxiliary_raw_material_display_flg' => $request->has('auxiliary_raw_material_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/auxiliary_raw_materials')->with('msg', '正しく登録されました');
    }

    public function edit($id)
    {
        $auxiliary_raw_material = AuxiliaryRawMaterial::findOrFail($id);
        return view('masters.auxiliary_raw_materials.edit', compact('auxiliary_raw_material'));
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'auxiliary_raw_material_display_flg' => 'boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'maker.required' => 'メーカーは必須です',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];        

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/master/auxiliary_raw_materials/edit/' . $id)
                ->withErrors($validator)
                ->withInput();
        }

        $material = AuxiliaryRawMaterial::findOrFail($id);
        $material->update([
            'name' => $request->name,
            'maker' => $request->maker,
            'auxiliary_raw_material_display_flg' => $request->has('auxiliary_raw_material_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/auxiliary_raw_materials')->with('msg', '正しく更新されました');
    }

    public function delete($id)
    {
        AuxiliaryRawMaterial::destroy($id);
        return redirect('/master/auxiliary_raw_materials')->with('msg', '削除が完了しました');
    }
}

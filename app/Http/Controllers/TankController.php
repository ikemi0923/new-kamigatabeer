<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanks;
use Illuminate\Support\Facades\Validator;

class TankController extends Controller
{
    function index()
    {
        $tanks = Tanks::all();
        return view('masters.tanks', ['tanks' => $tanks]);
    }

    function show()
    {
        $tanks = Tanks::all();
        return view('masters.tanks.create', ['tanks' => $tanks]);
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'name.max' => '名前は20文字以内で入力してください',
        ];
        $tank = Validator::make($request->all(), $rules, $message);
        if ($tank->fails()) {
            return redirect('/masters/tanks/create')
                ->withErrors($tank)
                ->withInput();
        } else {
            $post = new Tanks();
            $post->name = $request->name;
            $post->save();
            return view('masters.tanks.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $tank = Tanks::findOrFail($id);
        return view('masters.tanks.edit', ['tank' =>  $tank,]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
        ];

        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'name.max' => '名前は20文字以内で入力してください',
        ];

        $tank = Validator::make($request->all(), $rules, $message);
        if ($tank->fails()) {
            return redirect('masters.tanks.create')
                ->withErrors($tank)
                ->withInput();
        } else {
            $tank = Tanks::findOrFail($id);
            $tank->name = $request->name;
            $tank->save();
            return view('masters.tanks.create', ['msg' => '正しく入力されました']);
        }
    }


    function delete($id, Request $request)
    {
        $db_data = new Tanks;
        $db_data->destroy(1);
    }

}

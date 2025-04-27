<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wheat_rice_sugars;
use Illuminate\Support\Facades\Validator;

class Wheat_rice_sugarController extends Controller
{
    function index()
    {
        $wheat_rice_sugars = Wheat_rice_sugars::all();
        return view('masters.wheat_rice_sugars', ['wheat_rice_sugars' => $wheat_rice_sugars]);
    }


    function show()
    {
        $wheat_rice_sugars = Wheat_rice_sugars::all();

        return view('masters.wheat_rice_sugars.create', ['wheat_rice_sugars' => $wheat_rice_sugars]);
    }



    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric|min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'wheat_rice_sugar_display_flg' => 'boolean',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'ppg.required' => 'PPGを入力してください',
            'color.required' => '色度を入力してください',
            'wheat_rice_sugar_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
            'ppg.max' => 'PPGは0から100の数値で入力してください',
            'ppg.min' => 'PPGは0から100の数値で入力してください',
            'color.max' => '色度は0から100の数値で入力してください',
            'color.min' => '色度は0から100の数値で入力してください',
        ];
        $wheat_rice_sugars = Validator::make($request->all(), $rules, $message);
        if ($wheat_rice_sugars->fails()) {
            return redirect('/masters/wheat_rice_sugars/create')
                ->withErrors($wheat_rice_sugars)
                ->withInput();
        } else {
            $post = new Wheat_rice_sugars();
            $post->name = $request->name;
            $post->maker = $request->maker;
            $post->ppg = $request->ppg;
            $post->color = $request->color;
            $post->wheat_rice_sugar_display_flg = 1;
            $post->save();
            return view('/masters/wheat_rice_sugars/create', ['msg' => '正しく入力されました']);
        }
    }


    public function edit($id, Request $request)
    {
        $wheat_rice_sugar = Wheat_rice_sugars::findOrFail($id);
        return view('masters.wheat_rice_sugars.edit', ['wheat_rice_sugars' => $wheat_rice_sugar,]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric||min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'wheat_rice_sugar_display_flg' => 'boolean',
        ];

        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'ppg.required' => 'PPGを入力してください',
            'color.required' => '色度を入力してください',
            'wheat_rice_sugar_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
            'ppg.max' => 'PPGは0から100の数値で入力してください',
            'ppg.min' => 'PPGは0から100の数値で入力してください',
            'color.max' => '色度は0から100の数値で入力してください',
            'color.min' => '色度は0から100の数値で入力してください',
        ];

        $wheat_rice_sugar = Validator::make($request->all(), $rules, $message);
        if ($wheat_rice_sugar->fails()) {
            return redirect('/masters/wheat_rice_sugars/create')
                ->withErrors($wheat_rice_sugar)
                ->withInput();
        } else {
            $wheat_rice_sugar = Wheat_rice_sugars::findOrFail($id);
            $wheat_rice_sugar->name = $request->name;
            $wheat_rice_sugar->maker = $request->maker;
            $wheat_rice_sugar->ppg = $request->ppg;
            $wheat_rice_sugar->color = $request->color;
            $wheat_rice_sugar->wheat_rice_sugar_display_flg = $request->wheat_rice_sugars_display_flg;
            $wheat_rice_sugar->save();
            return view('/masters/wheat_rice_sugars/create', ['msg' => '正しく入力されました']);
        }
    }

    function delete($id, Request $request)
    {
        $db_data = new Wheat_rice_sugars;
        $db_data->destroy(1);
    }
  
}

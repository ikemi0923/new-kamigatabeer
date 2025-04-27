<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yeasts;
use Illuminate\Support\Facades\Validator;

class YeastController extends Controller
{
    function index()
    {
        $yeasts = Yeasts::all();
        return view('masters.yeasts', ['yeasts' => $yeasts]);
    }

    function show()
    {
        $yeasts = Yeasts::all();
        return view('masters.yeasts.create', ['yeasts' => $yeasts]);
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'yeast_display_flg' => 'boolean',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'yeast_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];
        $yeast = Validator::make($request->all(), $rules, $message);
        if ($yeast->fails()) {
            return redirect('/masters/yeasts/create')
                ->withErrors($yeast)
                ->withInput();
        } else {
            $post = new Yeasts();
            $post->name = $request->name;
            $post->maker = $request->maker;
            $post->yeast_display_flg = 1;
            $post->save();
            return view('masters.yeasts.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $yeast = Yeasts::findOrFail($id);
        return view('masters.yeasts.edit', ['yeast' =>  $yeast,]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'yeast_display_flg' => 'boolean',
        ];

        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'yeast_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];

        $yeast = Validator::make($request->all(), $rules, $message);
        if ($yeast->fails()) {
            return redirect('masters.yeasts.create')
                ->withErrors($yeast)
                ->withInput();
        } else {
            $yeast = Yeasts::findOrFail($id);
            $yeast->name = $request->name;
            $yeast->maker = $request->maker;
            $yeast->yeast_display_flg = $request->yeasts_display_flg;
            $yeast->save();
            return view('masters.yeasts.create', ['msg' => '正しく入力されました']);
        }
    }


    function delete($id, Request $request)
    {
        $db_data = new Yeasts;
        $db_data->destroy(1);
    }

}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yeasts;
use Illuminate\Support\Facades\Validator;

class YeastController extends Controller
{
    public function index()
    {
        $yeasts = Yeasts::paginate(10);
        return view('masters.yeasts.index', compact('yeasts'));
    }

    public function create()
    {
        return view('masters.yeasts.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'yeast_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/master/yeasts/create')
                ->withErrors($validator)
                ->withInput();
        }

        Yeasts::create([
            'name' => $request->name,
            'maker' => $request->maker,
            'yeast_display_flg' => $request->has('yeast_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/yeasts')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $yeast = Yeasts::findOrFail($id);
        return view('masters.yeasts.edit', compact('yeast'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'yeast_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect("/master/yeasts/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $yeast = Yeasts::findOrFail($id);
        $yeast->update([
            'name' => $request->name,
            'maker' => $request->maker,
            'yeast_display_flg' => $request->has('yeast_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/yeasts')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Yeasts::destroy($id);
        return redirect('/master/yeasts')->with('msg', '削除しました');
    }
}

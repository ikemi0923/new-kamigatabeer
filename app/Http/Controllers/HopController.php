<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hops;
use Illuminate\Support\Facades\Validator;

class HopController extends Controller
{
    public function index()
    {
        $hops = Hops::paginate(10);
        return view('masters.hops.index', compact('hops'));
    }

    public function create()
    {
        return view('masters.hops.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'alpha' => 'required|numeric|min:0|max:100',
            'hops_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'maker.required' => 'メーカーは必須です',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        
            'alpha.required' => 'アルファ酸は必須です',
            'alpha.numeric' => 'アルファ酸は数値で入力してください',
            'alpha.min' => 'アルファ酸は0以上の数値で入力してください',
            'alpha.max' => 'アルファ酸は100以下の数値で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/master/hops/create')
                ->withErrors($validator)
                ->withInput();
        }

        Hops::create([
            'name' => $request->name,
            'maker' => $request->maker,
            'alpha' => $request->alpha,
            'hops_display_flg' => $request->has('hops_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/hops')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $hop = Hops::findOrFail($id);
        return view('masters.hops.edit', compact('hop'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'alpha' => 'required|numeric|min:0|max:100',
            'hops_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'maker.required' => 'メーカーは必須です',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        
            'alpha.required' => 'アルファ酸は必須です',
            'alpha.numeric' => 'アルファ酸は数値で入力してください',
            'alpha.min' => 'アルファ酸は0以上の数値で入力してください',
            'alpha.max' => 'アルファ酸は100以下の数値で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect("/master/hops/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $hop = Hops::findOrFail($id);
        $hop->update([
            'name' => $request->name,
            'maker' => $request->maker,
            'alpha' => $request->alpha,
            'hops_display_flg' => $request->has('hops_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/hops')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        $hop = Hops::findOrFail($id);
        $hop->delete();

        return redirect('/master/hops')->with('success', '削除しました');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WheatRiceSugar;
use Illuminate\Support\Facades\Validator;

class WheatRiceSugarController extends Controller
{
    public function index()
    {
        $wheatRiceSugars = WheatRiceSugar::all();
        return view('masters.wheat_rice_sugars.index', compact('wheatRiceSugars'));
    }
    

    public function create()
    {
        return view('masters.wheat_rice_sugars.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric|min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'wheat_rice_sugar_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'ppg.required' => 'PPGを入力してください',
            'color.required' => '色度を入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
            'ppg.min' => 'PPGは0以上で入力してください',
            'ppg.max' => 'PPGは99999以下で入力してください',
            'color.min' => '色度は0以上で入力してください',
            'color.max' => '色度は99999以下で入力してください',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/master/wheat_rice_sugars/create')
                ->withErrors($validator)
                ->withInput();
        }

        WheatRiceSugar::create([
            'name' => $request->name,
            'maker' => $request->maker,
            'ppg' => $request->ppg,
            'color' => $request->color,
            'wheat_rice_sugar_display_flg' => $request->has('wheat_rice_sugar_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/wheat_rice_sugars')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $wheat_rice_sugar = WheatRiceSugar::findOrFail($id);
        return view('masters.wheat_rice_sugars.edit', compact('wheat_rice_sugar'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric|min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'wheat_rice_sugar_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前を20字以内で入力してください',
            'maker.required' => 'メーカーを20字以内で入力してください',
            'ppg.required' => 'PPGを入力してください',
            'color.required' => '色度を入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => 'メーカーは20文字以内で入力してください',
            'ppg.min' => 'PPGは0以上で入力してください',
            'ppg.max' => 'PPGは99999以下で入力してください',
            'color.min' => '色度は0以上で入力してください',
            'color.max' => '色度は99999以下で入力してください',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect("/master/wheat_rice_sugars/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $wheat_rice_sugar = WheatRiceSugar::findOrFail($id);
        $wheat_rice_sugar->update([
            'name' => $request->name,
            'maker' => $request->maker,
            'ppg' => $request->ppg,
            'color' => $request->color,
            'wheat_rice_sugar_display_flg' => $request->has('wheat_rice_sugar_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/wheat_rice_sugars')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        WheatRiceSugar::destroy($id);
        return redirect('/master/wheat_rice_sugars')->with('msg', '削除しました');
    }
}

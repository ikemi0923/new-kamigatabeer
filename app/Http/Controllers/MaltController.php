<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malts;
use Illuminate\Support\Facades\Validator;

class MaltController extends Controller
{
    public function index()
    {
        $malts = Malts::paginate(10);
        return view('masters.malts.index', compact('malts'));
    }

    public function create()
    {
        return view('masters.malts.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric|min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'malts_display_flg' => 'nullable|boolean',
        ];
    
        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'maker.required' => 'メーカーは必須です',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        
            'ppg.required' => 'PPGは必須です',
            'ppg.numeric' => 'PPGは数値で入力してください',
            'ppg.min' => 'PPGは0以上の数値で入力してください',
            'ppg.max' => 'PPGは99999以下の数値で入力してください',
        
            'color.required' => '色度は必須です',
            'color.numeric' => '色度は数値で入力してください',
            'color.min' => '色度は0以上の数値で入力してください',
            'color.max' => '色度は99999以下の数値で入力してください',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect('/master/malts/create')
                ->withErrors($validator)
                ->withInput();
        }
    
        Malts::create([
            'name' => $request->name,
            'maker' => $request->maker,
            'ppg' => $request->ppg,
            'color' => $request->color,
            'malts_display_flg' => $request->has('malts_display_flg') ? 1 : 0,
        ]);
    
        return redirect('/master/malts')->with('msg', '保存しました');
    }
    

    public function edit($id)
    {
        $malt = Malts::findOrFail($id);
        return view('masters.malts.edit', compact('malt'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'maker' => 'required|string|max:20',
            'ppg' => 'required|numeric|min:0|max:99999',
            'color' => 'required|numeric|min:0|max:99999',
            'malts_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'maker.required' => 'メーカーは必須です',
            'maker.max' => 'メーカーは20文字以内で入力してください',
        
            'ppg.required' => 'PPGは必須です',
            'ppg.numeric' => 'PPGは数値で入力してください',
            'ppg.min' => 'PPGは0以上の数値で入力してください',
            'ppg.max' => 'PPGは99999以下の数値で入力してください',
        
            'color.required' => '色度は必須です',
            'color.numeric' => '色度は数値で入力してください',
            'color.min' => '色度は0以上の数値で入力してください',
            'color.max' => '色度は99999以下の数値で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect("/master/malts/edit/{$id}")
                ->withErrors($validator)
                ->withInput();
        }

        $malt = Malts::findOrFail($id);
        $malt->update([
            'name' => $request->name,
            'maker' => $request->maker,
            'ppg' => $request->ppg,
            'color' => $request->color,
            'malts_display_flg' => $request->has('malts_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/malts')->with('success', '更新しました');

    }

    public function destroy($id)
    {
        $malt = Malts::findOrFail($id);
        $malt->delete();
    
        return redirect('/master/malts')->with('success', '削除しました');
    }
    
}

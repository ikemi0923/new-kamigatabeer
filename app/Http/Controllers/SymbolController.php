<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symbol;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;

class SymbolController extends Controller
{
    public function index()
    {
        $symbols = Symbol::with('stores')->get();
        return view('masters.symbols.index', compact('symbols'));
    }

    public function create()
    {
        $stores = Store::all();
        return view('masters.symbols.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'brand' => 'required|string|max:20',
            'item_id' => 'required|numeric|min:0|max:99999',
            'store_ids' => 'array',
        ], [
            'name.required' => '名称は必須です',
            'name.max' => '名称は20文字以内で入力してください',
            'brand.required' => '銘柄は必須です',
            'brand.max' => '銘柄は20文字以内で入力してください',
            'item_id.required' => '品目は必須です',
            'item_id.numeric' => '品目は数値で入力してください',
            'item_id.min' => '品目は0以上で入力してください',
            'item_id.max' => '品目は99999以下で入力してください',
        ]);
        

        $symbol = Symbol::create($validated);

        if ($request->has('store_ids')) {
            $symbol->stores()->attach($request->input('store_ids'));
        }

        return redirect()->route('symbols.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $symbol = Symbol::findOrFail($id);
        $stores = Store::all();
        $selected = $symbol->stores->pluck('id')->toArray();

        return view('masters.symbols.edit', compact('symbol', 'stores', 'selected'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'brand' => 'required|string|max:20',
            'item_id' => 'required|numeric|min:0|max:99999',
            'store_ids' => 'array',
        ], [
            'name.required' => '名称は必須です',
            'name.max' => '名称は20文字以内で入力してください',
            'brand.required' => '銘柄は必須です',
            'brand.max' => '銘柄は20文字以内で入力してください',
            'item_id.required' => '品目は必須です',
            'item_id.numeric' => '品目は数値で入力してください',
            'item_id.min' => '品目は0以上で入力してください',
            'item_id.max' => '品目は99999以下で入力してください',
        ]);
        

        $symbol = Symbol::findOrFail($id);
        $symbol->update($validated);
        $symbol->stores()->sync($request->input('store_ids', []));

        return redirect()->route('symbols.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Symbol::findOrFail($id)->delete();
        return redirect()->route('symbols.index')->with('msg', '削除しました');
    }
}

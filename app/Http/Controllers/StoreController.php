<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Symbol;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('masters.stores.index', compact('stores'));
    }

    public function create()
    {
        $symbols = Symbol::all();
        return view('masters.stores.create', compact('symbols'));
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'store_name' => 'required|string|max:20',
        ], [
            'store_name.required' => '店舗名は必須です',
            'store_name.max' => '店舗名は20文字以内で入力してください',
        ]);
        
    
        $validated['delete_flg'] = $request->has('delete_flg') ? 1 : 0;
        $validated['factory_address_flg'] = $request->has('factory_address_flg') ? 1 : 0;
        $validated['symbol_choice_flg'] = $request->has('symbol_choice_flg') ? 1 : 0;
    
        $store = Store::create($validated);
    
        if ($request->has('symbol_ids')) {
            $store->symbols()->sync($request->input('symbol_ids'));
        }
    
        return redirect()->route('stores.index')->with('msg', '保存しました');
    }
    

    public function edit($id)
    {
        $store = Store::findOrFail($id);
        $symbols = Symbol::all();
        $selected = $store->symbols->pluck('id')->toArray();
    
        return view('masters.stores.edit', compact('store', 'symbols', 'selected'));
    }    
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'store_name' => 'required|string|max:20',
            'delete_flg' => 'boolean',
            'factory_address_flg' => 'boolean',
            'symbol_choice_flg' => 'boolean',
        ], [
            'store_name.required' => '店舗名は必須です',
            'store_name.max' => '店舗名は20文字以内で入力してください',
        ]);
        
    
        $store = Store::findOrFail($id);
        $store->update($validated);
    
        if ($request->has('symbol_ids')) {
            $store->symbols()->sync($request->input('symbol_ids'));
        }
    
        return redirect()->route('stores.index')->with('msg', '更新しました');
    }
    

    public function destroy($id)
    {
        Store::findOrFail($id)->delete();
        return redirect()->route('stores.index')->with('msg', '削除しました');
    }
}

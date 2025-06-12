<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);
        return view('masters.items.index', compact('items'));
    }

    public function create()
    {
        return view('masters.items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'beer_style' => 'required|string|max:50',
            'abv' => 'required|numeric|min:0|max:100',
            'ibu' => 'required|integer|min:0|max:255',
        ], [
            'name.required' => '商品名は必須です',
            'name.max' => '商品名は50文字以内で入力してください',

            'beer_style.required' => 'ビアスタイルは必須です',
            'beer_style.max' => 'ビアスタイルは50文字以内で入力してください',

            'abv.required' => 'ABV（アルコール度数）は必須です',
            'abv.numeric' => 'ABVは数値で入力してください',
            'abv.min' => 'ABVは0以上で入力してください',
            'abv.max' => 'ABVは100以下で入力してください',

            'ibu.required' => 'IBUは必須です',
            'ibu.integer' => 'IBUは整数で入力してください',
            'ibu.min' => 'IBUは0以上で入力してください',
            'ibu.max' => 'IBUは255以下で入力してください',
        ]);


        $validated['delete_flg'] = false;

        Item::create($validated);

        return redirect()->route('items.index')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('masters.items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'beer_style' => 'required|string|max:50',
            'abv' => 'required|numeric|min:0|max:100',
            'ibu' => 'required|integer|min:0|max:255',
        ], [
            'name.required' => '商品名は必須です',
            'name.max' => '商品名は50文字以内で入力してください',

            'beer_style.required' => 'ビアスタイルは必須です',
            'beer_style.max' => 'ビアスタイルは50文字以内で入力してください',

            'abv.required' => 'ABV（アルコール度数）は必須です',
            'abv.numeric' => 'ABVは数値で入力してください',
            'abv.min' => 'ABVは0以上で入力してください',
            'abv.max' => 'ABVは100以下で入力してください',

            'ibu.required' => 'IBUは必須です',
            'ibu.integer' => 'IBUは整数で入力してください',
            'ibu.min' => 'IBUは0以上で入力してください',
            'ibu.max' => 'IBUは255以下で入力してください',
        ]);


        $item = Item::findOrFail($id);
        $item->update($validated);

        return redirect()->route('items.index')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->route('items.index')->with('msg', '削除しました');
    }
}

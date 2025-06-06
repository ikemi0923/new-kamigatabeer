<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductContainer;
use Illuminate\Support\Facades\Validator;

class ProductContainerController extends Controller
{
    public function index()
    {
        $productContainers = ProductContainer::all();
        return view('masters.product_containers.index', compact('productContainers'));
    }

    public function create()
    {
        return view('masters.product_containers.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'capacity' => 'required|string|max:6',
            'product_container_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'capacity.required' => '容量は必須です',
            'capacity.max' => '容量は6文字以内で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/master/product_containers/create')
                ->withErrors($validator)
                ->withInput();
        }

        ProductContainer::create([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'product_container_display_flg' => $request->has('product_container_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/product_containers')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $product_container = ProductContainer::findOrFail($id);
        return view('masters.product_containers.edit', compact('product_container'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'capacity' => 'required|string|max:6',
            'product_container_display_flg' => 'nullable|boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'capacity.required' => '容量は必須です',
            'capacity.max' => '容量は6文字以内で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect("/master/product_containers/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $product_container = ProductContainer::findOrFail($id);
        $product_container->update([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'product_container_display_flg' => $request->has('product_container_display_flg') ? 1 : 0,
        ]);

        return redirect('/master/product_containers')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        ProductContainer::destroy($id);
        return redirect('/master/product_containers')->with('msg', '削除しました');
    }
}

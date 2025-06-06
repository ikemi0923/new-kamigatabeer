<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('masters.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('masters.suppliers.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'type' => 'required|string|max:20',
            'category' => 'required|string|max:20',
            // 'display_flg' => 'boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'type.required' => '種類は必須です',
            'type.max' => '種類は20文字以内で入力してください',
        
            'category.required' => '区分は必須です',
            'category.max' => '区分は20文字以内で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/master/suppliers/create')
                ->withErrors($validator)
                ->withInput();
        }

        Supplier::create([
            'name' => $request->name,
            'type' => $request->type,
            'category' => $request->category,
            // 'display_flg' => $request->has('display_flg') ? 1 : 0,
        ]);        

        return redirect('/master/suppliers')->with('msg', '保存しました');
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('masters.suppliers.edit', compact('supplier'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'type' => 'required|string|max:20',
            'category' => 'required|string|max:20',
            // 'display_flg' => 'boolean',
        ];

        $messages = [
            'name.required' => '名前は必須です',
            'name.max' => '名前は20文字以内で入力してください',
        
            'type.required' => '種類は必須です',
            'type.max' => '種類は20文字以内で入力してください',
        
            'category.required' => '区分は必須です',
            'category.max' => '区分は20文字以内で入力してください',
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect("/master/suppliers/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $supplier = Supplier::findOrFail($id);
        $supplier->update([
            'name' => $request->name,
            'type' => $request->type,
            'category' => $request->category,
            // 'display_flg' => $request->has('display_flg') ? 1 : 0,
        ]);

        return redirect('/master/suppliers')->with('msg', '更新しました');
    }

    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect('/master/suppliers')->with('msg', '削除しました');
    }
}

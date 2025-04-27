<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    function index()
    {
        $suppliers = Suppliers::all();
        return view('masters.suppliers', ['suppliers' => $suppliers]);
    }

    function show()
    {
        $suppliers = Suppliers::all();
        return view('masters.suppliers.create', ['suppliers' => $suppliers]);
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'kinds' => 'required|string|max:20',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'kinds.required' => '種類を20字以内で入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'kinds.max' => '種類は20文字以内で入力してください',
        ];
        $supplier = Validator::make($request->all(), $rules, $message);
        if ($supplier->fails()) {
            return redirect('/masters/suppliers/create')
                ->withErrors($supplier)
                ->withInput();
        } else {
            $post = new Suppliers();
            $post->name = $request->name;
            $post->kinds = $request->kinds;
            $post->save();
            return view('masters.suppliers.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $supplier = Suppliers::findOrFail($id);
        return view('masters.suppliers.edit', ['supplier' =>  $supplier,]);
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

        $supplier = Validator::make($request->all(), $rules, $message);
        if ($supplier->fails()) {
            return redirect('masters.suppliers.create')
                ->withErrors($supplier)
                ->withInput();
        } else {
            $supplier = Suppliers::findOrFail($id);
            $supplier->name = $request->name;
            $supplier->kinds = $request->kinds;
            $supplier->save();
            return view('masters.suppliers.create', ['msg' => '正しく入力されました']);
        }
    }


    function delete($id, Request $request)
    {
        $db_data = new Suppliers;
        $db_data->destroy(1);
    }

}

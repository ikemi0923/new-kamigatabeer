<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symbols;
use Illuminate\Support\Facades\Validator;

class SymbolController extends Controller
{
    function index()
    {
        $symbols = Symbols::all();

        return view('masters.symbols', ['symbols' => $symbols]);
    }

    function show()
    {
        $symbols = Symbols::all();

        return view('masters.symbols.create', ['symbols' => $symbols]);
    }



    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'brand' => 'required|string|max:20',
            'item_id' => 'required|numeric|min:0|max:99999',
        ];
        $message = [
            'name.required' => '名称を20字以内で入力してください',
            'brand.required' => '銘柄を20字以内で入力してください',
            'item_id.required' => '品目を入力してください',
            'name.max' => '名称は20文字以内で入力してください',
            'brand.max' => '銘柄は20文字以内で入力してください',
        ];
        $symbol = Validator::make($request->all(), $rules, $message);
        if ($symbol->fails()) {
            return redirect('/masters/symbols/create')
                ->withErrors($symbol)
                ->withInput();
        } else {
            $post = new Symbols();
            $post->name = $request->name;
            $post->brand = $request->brand;
            $post->item_id = $request->item_od;
            $post->save();
            return view('/masters/symbols/create', ['msg' => '正しく入力されました']);
        }
    }


    public function edit($id, Request $request)
    {
        $symbols = Symbols::findOrFail($id);
        return view('masters.symbols.edit', ['symbol' => $symbols]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'brand' => 'required|string|max:20',
            'item_id' => 'required|numeric|min:0|max:99999',
        ];
        $message = [
            'name.required' => '名称を20字以内で入力してください',
            'brand.required' => '銘柄を20字以内で入力してください',
            'item_id.required' => '品目を入力してください',
            'name.max' => '名称は20文字以内で入力してください',
            'brand.max' => '銘柄は20文字以内で入力してください',
        ];

        $symbol = Validator::make($request->all(), $rules, $message);
        if ($symbol->fails()) {
            return redirect('/masters/symbols/create')
                ->withErrors($symbol)
                ->withInput();
        } else {
            $symbol = Symbols::findOrFail($id);
            $symbol->name = $request->name;
            $symbol->brand = $request->brand;
            $symbol->item_id = $request->item_id;
            $symbol->save();
            return view('/masters/symbols/create', ['msg' => '正しく入力されました']);
        }
    }

    function delete($id, Request $request)
    {
        $db_data = new Symbols;
        $db_data->destroy(1);
    }

}

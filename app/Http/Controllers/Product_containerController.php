<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_containers;
use Illuminate\Support\Facades\Validator;

class Product_containerController extends Controller
{
    function index()
    {
        $product_containers = Product_containers::all();
        return view('masters.product_containers', ['product_containers' => $product_containers]);
    }

    function show()
    {
        $product_containers = Product_containers::all();
        return view('masters.product_containers.create', ['product_containers' => $product_containers]);
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'capacity' => 'required|string|max:6',
            'product_container_display_flg' => 'boolean',
        ];
        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'capacity.required' => '容量を6桁以内で入力してください',
            'product_container_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'maker.max' => '容量は6桁以内で入力してください',
        ];
        $product_container = Validator::make($request->all(), $rules, $message);
        if ($product_container->fails()) {
            return redirect('/masters/product_containers/create')
                ->withErrors($product_container)
                ->withInput();
        } else {
            $post = new Product_containers();
            $post->name = $request->name;
            $post->maker = $request->maker;
            $post->product_container_display_flg = 1;
            $post->save();
            return view('masters.product_containers.create', ['msg' => '正しく入力されました']);
        }
    }

    public function edit($id, Request $request)
    {
        $product_container = Product_containers::findOrFail($id);
        return view('masters.product_containers.edit', ['product_container' =>  $product_container,]);
    }

    public function finish($id, Request $request)
    {
        $rules = [
            'name' => 'required|string|max:20',
            'capacity' => 'required|string|max:6',
            'product_container_display_flg' => 'boolean',
        ];

        $message = [
            'name.required' => '名前を20字以内で入力してください',
            'capacity.required' => '容量を6桁以内で入力してください',
            'product_container_display_flg' => 'チェックを入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'capacity.max' => '容量は6桁以内で入力してください',
        ];

        $product_container = Validator::make($request->all(), $rules, $message);
        if ($product_container->fails()) {
            return redirect('masters.product_containers.create')
                ->withErrors($product_container)
                ->withInput();
        } else {
            $product_container = Product_containers::findOrFail($id);
            $product_container->name = $request->name;
            $product_container->capacity = $request->capacity;
            $product_container->product_container_display_flg = $request->product_container_display_flg;
            $product_container->save();
            return view('masters.product_containers.create', ['msg' => '正しく入力されました']);
        }
    }


    function delete($id, Request $request)
    {
        $db_data = new Product_containers;
        $db_data->destroy(1);
    }

}

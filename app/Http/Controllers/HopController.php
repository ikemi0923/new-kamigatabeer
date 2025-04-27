<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hops;
use Illuminate\Support\Facades\Validator;

class HopController extends Controller
{
  function index()
  {
    $hops = Hops::all();
    return view('masters.hops', ['hops' => $hops]);
  }

  function show()
  {
    $hops = Hops::all();
    return view('masters.hops.create', ['hops' => $hops]);
  }

  public function add(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:20',
      'maker' => 'required|string|max:20',
      'alpha' => 'required|numeric|min:0|max:100',
      'hops_display_flg' => 'boolean',
    ];
    $message = [
      'name.required' => '名前を20字以内で入力してください',
      'maker.required' => 'メーカーを20字以内で入力してください',
      'alpha.required' => 'α酸(%)を入力してください',
      'hops_display_flg' => 'チェックを入力してください',
      'name.max' => '名前は20文字以内で入力してください',
      'maker.max' => 'メーカーは20文字以内で入力してください',
      'alpha.max' => 'α酸(%)は0から100の数値で入力してください',
      'alpha.min' => 'α酸(%)は0から100の数値で入力してください',
    ];
    $hop = Validator::make($request->all(), $rules, $message);
    if ($hop->fails()) {
      return redirect('/masters/hops/create')
        ->withErrors($hop)
        ->withInput();
    } else {
      $post = new Hops();
      $post->name = $request->name;
      $post->maker = $request->maker;
      $post->alpha = $request->alpha;
      $post->hops_display_flg = 1;
      $post->save();
      return view('masters.hops.create', ['msg' => '正しく入力されました']);
    }
  }

  public function edit($id, Request $request)
  {
    $hops = Hops::findOrFail($id);
    return view('masters.hops.edit', ['hop' =>  $hops,]);
  }

  public function finish($id, Request $request)
  {
    $rules = [
      'name' => 'required|string|max:20',
      'maker' => 'required|string|max:20',
      'alpha' => 'required|numeric|max:99999',
      'hops_display_flg' => 'boolean',
    ];

    $message = [
      'name.required' => '名前を20字以内で入力してください',
      'maker.required' => 'メーカーを20字以内で入力してください',
      'alpha.required' => 'α酸(%)を入力してください',
      'hops_display_flg' => 'チェックを入力してください',
      'name.max' => '名前は20文字以内で入力してください',
      'maker.max' => 'メーカーは20文字以内で入力してください',
      'alpha.max' => 'α酸(%)は0から100の数値で入力してください',
      'alpha.min' => 'α酸(%)は0から100の数値で入力してください',
    ];

    $hop = Validator::make($request->all(), $rules, $message);
    if ($hop->fails()) {
      return redirect('/masters/hops/create')
        ->withErrors($hop)
        ->withInput();
    } else {
      $post = new Hops();
      $post->name = $request->name;
      $post->maker = $request->maker;
      $post->alpha = $request->alpha;
      $post->hops_display_flg = 1;
      $post->save();
      return view('masters.hops.create', ['msg' => '正しく入力されました']);
    }
  }


  function delete($id, Request $request)
  {
    $db_data = new Hops;
    $db_data->destroy(1);
  }
}

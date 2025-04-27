<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Malts;
use Illuminate\Support\Facades\Validator;



class MaltController extends Controller
{
  function index()
  {
    $malts = Malts::all();

    return view('masters.malts', ['malts' => $malts]);
  }

  function show()
  {
    $malts = Malts::all();

    return view('masters.malts.create', ['malts' => $malts]);
  }



  public function add(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:20',
      'maker' => 'required|string|max:20',
      'ppg' => 'required|numeric|min:0|max:99999',
      'color' => 'required|numeric|min:0|max:99999',
      'malts_display_flg' => 'boolean',
    ];
    $message = [
      'name.required' => '名前を20字以内で入力してください',
      'maker.required' => 'メーカーを20字以内で入力してください',
      'ppg.required' => 'PPGを入力してください',
      'color.required' => '色度を入力してください',
      'malts_display_flg' => 'チェックを入力してください',
      'name.max' => '名前は20文字以内で入力してください',
      'maker.max' => 'メーカーは20文字以内で入力してください',
      'ppg.max' => 'PPGは0から100の数値で入力してください',
      'ppg.min' => 'PPGは0から100の数値で入力してください',
      'color.max' => '色度は0から100の数値で入力してください',
      'color.min' => '色度は0から100の数値で入力してください',
    ];
    $malt = Validator::make($request->all(), $rules, $message);
    if ($malt->fails()) {
      return redirect('/masters/malts/create')
        ->withErrors($malt)
        ->withInput();
    } else {
      $post = new Malts();
      $post->name = $request->name;
      $post->maker = $request->maker;
      $post->alpha = $request->alpha;
      $post->hops_display_flg = 1;
      $post->save();
      return view('/masters/malts/create', ['msg' => '正しく入力されました']);
    }
  }


  public function edit($id, Request $request)
  {
    $malts = Malts::findOrFail($id);
    return view('masters.malts.edit', ['malt' => $malts]);
  }

  public function finish($id, Request $request)
  {
    $rules = [
      'name' => 'required|string|max:20',
      'maker' => 'required|string|max:20',
      'ppg' => 'required|numeric||min:0|max:99999',
      'color' => 'required|numeric|min:0|max:99999',
      'malts_display_flg' => 'boolean',
    ];

    $message = [
      'name.required' => '名前を20字以内で入力してください',
      'maker.required' => 'メーカーを20字以内で入力してください',
      'ppg.required' => 'PPGを入力してください',
      'color.required' => '色度を入力してください',
      'malts_display_flg' => 'チェックを入力してください',
      'name.max' => '名前は20文字以内で入力してください',
      'maker.max' => 'メーカーは20文字以内で入力してください',
      'ppg.max' => 'PPGは0から100の数値で入力してください',
      'ppg.min' => 'PPGは0から100の数値で入力してください',
      'color.max' => '色度は0から100の数値で入力してください',
      'color.min' => '色度は0から100の数値で入力してください',
    ];

    $malt = Validator::make($request->all(), $rules, $message);
    if ($malt->fails()) {
      return redirect('/masters/malts/create')
        ->withErrors($malt)
        ->withInput();
    } else {
      $malt = Malts::findOrFail($id);
      $malt->name = $request->name;
      $malt->maker = $request->maker;
      $malt->ppg = $request->ppg;
      $malt->color = $request->color;
      $malt->malts_display_flg = $request->malts_display_flg;
      $malt->save();
      return view('/masters/malts/create', ['msg' => '正しく入力されました']);
    }
  }

  function delete($id, Request $request)
  {
    $db_data = new Malts;
    $db_data->destroy(1);
  }

}

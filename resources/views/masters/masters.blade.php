@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container">
    <div class="card text-center">
      <div class="card-body">
        <div class="back-button mb-3">
          <a href="{{ url('/menu') }}" class="btn btn-dark">戻る</a>
        </div>
        <h3 class="title-margin mt-3 mb-5">マスター管理</h3>
        <div class="d-flex flex-wrap justify-content-center mb-2">
          <a href="/master/malts" class="menu-button blue">麦芽</a>
          <a href="/master/hops" class="menu-button blue">ホップ</a>
          <a href="/master/yeasts" class="menu-button blue">酵母</a>
          <a href="/master/auxiliary_raw_materials" class="menu-button blue">副原料</a>
          <a href="/master/wheat_rice_sugars" class="menu-button blue">麦米糖類</a>
          <a href="/master/product_containers" class="menu-button blue">製品容器</a>
          <a href="/master/suppliers" class="menu-button blue">取引先</a>
          <a href="/master/basic_informations" class="menu-button blue">基本情報</a>
          <a href="/master/employees" class="menu-button blue">担当者</a>
          <a href="/master/symbols" class="menu-button blue">記号</a>
          <a href="/master/stores" class="menu-button blue">店舗</a>
          <a href="/master/tanks" class="menu-button blue">タンク</a>
          <a href="/master/items" class="menu-button blue">商品</a>
          <a href="/master/users" class="menu-button blue">ユーザー</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

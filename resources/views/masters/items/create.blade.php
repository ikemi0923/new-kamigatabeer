@extends('layouts.app')

@section('content')
<div class="container">

  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">商品新規追加</span>
    </div>
    <div class="align-self-center mr-3">
      <button type="submit" form="createForm" class="btn btn-primary" style="width: 8rem;">
        保存
      </button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('items.index') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
  </div>
  @endif


  {{-- バリデーションエラー表示 --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  {{-- 登録フォーム --}}
  <form method="POST" action="{{ route('items.store') }}" id="createForm">
    @csrf

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">商品名</label>
      <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">ビアスタイル</label>
      <div class="col-sm-6">
        <input type="text" name="beer_style" class="form-control" value="{{ old('beer_style') }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">ABV（%）</label>
      <div class="col-sm-6">
        <input type="number" step="0.1" name="abv" class="form-control" value="{{ old('abv') }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">IBU</label>
      <div class="col-sm-6">
        <input type="number" name="ibu" class="form-control" value="{{ old('ibu') }}">
      </div>
    </div>
  </form>

</div>
@endsection
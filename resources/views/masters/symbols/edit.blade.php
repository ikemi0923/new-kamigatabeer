@extends('layouts.app')

@section('content')
<div class="container">

@if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif


  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('symbols.update', $symbol->id) }}">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">記号の編集</span>
      </div>
      <div class="align-self-center mr-3">
        <button type="submit" class="btn btn-primary" style="width: 8rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ route('symbols.index') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名称</label>
      <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="{{ old('name', $symbol->name) }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">銘柄</label>
      <div class="col-sm-6">
        <input type="text" name="brand" class="form-control" value="{{ old('brand', $symbol->brand) }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">品目</label>
      <div class="col-sm-6">
        <select name="item_id" class="form-control">
          <option value="">選択してください</option>
          <option value="1" {{ old('item_id', $symbol->item_id) == 1 ? 'selected' : '' }}>ビール</option>
          <option value="2" {{ old('item_id', $symbol->item_id) == 2 ? 'selected' : '' }}>発泡酒50以上</option>
          <option value="3" {{ old('item_id', $symbol->item_id) == 3 ? 'selected' : '' }}>発泡酒50〜25</option>
          <option value="4" {{ old('item_id', $symbol->item_id) == 4 ? 'selected' : '' }}>発泡酒25以下</option>
        </select>
      </div>
    </div>

    <div class="form-group row mt-3 justify-content-center">
      <label class="col-sm-2 col-form-label text-right">
        店舗の選択 <span class="badge badge-danger">必須</span>
      </label>
      <div class="col-sm-6">
        @foreach ($stores as $store)
          <div class="form-check mb-2">
            <input class="form-check-input mt-1" type="checkbox" name="store_ids[]"
                   value="{{ $store->id }}"
                   id="store{{ $store->id }}"
                   {{ in_array($store->id, $selected ?? []) ? 'checked' : '' }}>
            <label class="form-check-label" for="store{{ $store->id }}">{{ $store->store_name }}</label>
          </div>
        @endforeach
      </div>
    </div>
  </form>

  <form method="POST" action="{{ route('symbols.destroy', $symbol->id) }}" class="mt-3" onsubmit="return confirm('本当に削除しますか？');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
  </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
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

  <form method="POST" action="{{ route('stores.update', $store->id) }}">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">店舗の編集</span>
      </div>
      <div class="align-self-center mr-3">
        <button type="submit" class="btn btn-primary" style="width: 8rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ url('/master/stores') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名称</label>
      <div class="col-sm-6">
        <input type="text" name="store_name" class="form-control" value="{{ old('store_name', $store->store_name) }}">
      </div>
    </div>

    <div class="form-group row justify-content-center mt-3">
      <label class="col-sm-2 col-form-label text-right">
        記号の選択 <span class="badge badge-danger">必須</span>
      </label>
      <div class="col-sm-6">
        @foreach ($symbols as $symbol)
        <div class="form-check mb-2">
          <input class="form-check-input mt-1" type="checkbox" name="symbol_ids[]" value="{{ $symbol->id }}"
            id="symbol{{ $symbol->id }}" {{ in_array($symbol->id, $selected ?? []) ? 'checked' : '' }}>
          <label class="form-check-label" for="symbol{{ $symbol->id }}">
            {{ $symbol->name }}
          </label>
        </div>
        @endforeach
      </div>
    </div>



  </form>

  <form method="POST" action="{{ route('stores.destroy', $store->id) }}" onsubmit="return confirm('本当に削除しますか？');" class="mt-3">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
  </form>

</div>
@endsection
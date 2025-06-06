@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">商品容器の編集</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" style="width: 10rem;" form="editForm">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('product_containers.index') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

  {{-- バリデーションエラー --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" id="editForm" action="{{ route('product_containers.update', $product_container->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product_container->name) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="capacity" class="col-sm-4 col-form-label text-md-right">容量</label>
      <div class="col-md-6">
        <input type="text" name="capacity" id="capacity" class="form-control" value="{{ old('capacity', $product_container->capacity) }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="product_container_display_flg" id="is_visibled" class="custom-control-input"
          value="1" {{ old('product_container_display_flg', $product_container->product_container_display_flg) ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>

  <div class="d-flex justify-content-start mt-5">
    <div class="align-self-center mr-auto">
      <form method="POST" action="{{ route('product_containers.destroy', $product_container->id) }}" onsubmit="return confirm('本当に削除しますか？')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">この商品容器を削除</button>
      </form>
    </div>
  </div>
</div>
@endsection

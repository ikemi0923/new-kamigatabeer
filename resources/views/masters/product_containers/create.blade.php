@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">商品容器の登録</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" form="createForm" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('product_containers.index') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

  {{-- 成功メッセージ --}}
  @if (session('msg'))
    <script>
      alert(@json(session('msg')));
    </script>
  @endif

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

  <form method="POST" action="{{ route('product_containers.store') }}" id="createForm">
    @csrf

    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="capacity" class="col-sm-4 col-form-label text-md-right">容量</label>
      <div class="col-md-6">
        <input type="text" name="capacity" id="capacity" class="form-control" value="{{ old('capacity') }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="product_container_display_flg" id="is_visibled" class="custom-control-input" value="1" {{ old('product_container_display_flg') ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>
</div>
@endsection

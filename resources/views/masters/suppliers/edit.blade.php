@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">取引先の編集</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" form="editForm" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('suppliers.index') }}" class="btn btn-dark">戻る</a>
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

  <form method="POST" id="editForm" action="{{ route('suppliers.update', $supplier->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $supplier->name) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="type" class="col-sm-2 col-form-label text-md-right">種類</label>
      <div class="col-md-6">
        <input id="type" type="text" class="form-control" name="type" value="{{ old('type', $supplier->type) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="category" class="col-sm-2 col-form-label text-md-right">区分</label>
      <div class="col-md-6">
        <input id="category" type="text" class="form-control" name="category" value="{{ old('category', $supplier->category) }}">
      </div>
    </div>

    <!-- <div class="form-group row">
      <div class="col-md-6 offset-md-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="display_flg" id="display_flg"
            {{ old('display_flg', $supplier->display_flg) ? 'checked' : '' }}>
          <label class="form-check-label" for="display_flg">
            表示する
          </label>
        </div>
      </div>
    </div> -->
  </form>

  <form method="POST" action="{{ route('suppliers.destroy', $supplier->id) }}" onsubmit="return confirm('本当に削除しますか？')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">この取引先を削除</button>
  </form>

</div>
@endsection
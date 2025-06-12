@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功ポップ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
  </div>
@endif


  {{-- バリデーションエラー --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="POST" action="{{ url('/master/hops/' . $hop->id) }}" id="editForm">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">ホップの編集</span>
      </div>
      <div class="align-self-center mr-2">
        <button type="submit" class="btn btn-primary" style="width: 10rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ url('/master/hops') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $hop->name) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="maker" class="col-sm-4 col-form-label text-md-right">メーカー</label>
      <div class="col-md-6">
        <input type="text" name="maker" id="maker" class="form-control" value="{{ old('maker', $hop->maker) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="alpha" class="col-sm-4 col-form-label text-md-right">α酸(%)</label>
      <div class="col-md-6">
        <input type="number" name="alpha" id="alpha" class="form-control" value="{{ old('alpha', $hop->alpha) }}">
      </div>
    </div>


    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="hops_display_flg" id="is_visibled" class="custom-control-input" value="1" {{ old('hops_display_flg', $hop->hops_display_flg) ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>

  <div class="d-flex justify-content-start mt-5">
    <div class="align-self-center mr-auto">
      <form method="POST" action="{{ url('/master/hops/' . $hop->id) }}" onsubmit="return confirm('本当に削除しますか？')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">このホップを削除</button>
      </form>
    </div>
  </div>
</div>
@endsection
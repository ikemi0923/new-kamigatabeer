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

  <form method="POST" action="{{ url('/master/wheat_rice_sugars') }}" id="createForm">
    @csrf

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">麦・米・糖類の登録</span>
      </div>
      <div class="align-self-center mr-2">
        <button type="submit" class="btn btn-primary" style="width: 10rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ url('/master/wheat_rice_sugars') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="maker" class="col-sm-4 col-form-label text-md-right">メーカー</label>
      <div class="col-md-6">
        <input type="text" name="maker" id="maker" class="form-control" value="{{ old('maker') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="ppg" class="col-sm-4 col-form-label text-md-right">PPG</label>
      <div class="col-md-6">
        <input type="number" name="ppg" id="ppg" class="form-control" value="{{ old('ppg') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="color" class="col-sm-4 col-form-label text-md-right">色度</label>
      <div class="col-md-6">
        <input type="number" name="color" id="color" class="form-control" value="{{ old('color') }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="wheat_rice_sugar_display_flg" id="is_visibled"
          class="custom-control-input" value="1" {{ old('wheat_rice_sugar_display_flg') ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>
</div>
@endsection
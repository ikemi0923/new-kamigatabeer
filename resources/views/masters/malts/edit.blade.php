@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">麦芽の編集</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" form="editForm" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="/master/malts" class="btn btn-dark">戻る</a>
    </div>
  </div>

  <!-- @if (session('msg'))
    <div class="alert alert-success" role="alert">
      {{ session('msg') }}
    </div>
  @endif -->

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ url('/master/malts/' . $malt->id) }}" id="editForm">
    @csrf
    @method('PUT')
    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ $malt->name }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="maker" class="col-sm-4 col-form-label text-md-right">メーカー</label>
      <div class="col-md-6">
        <input type="text" name="maker" id="maker" class="form-control" value="{{ $malt->maker }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="ppg" class="col-sm-4 col-form-label text-md-right">PPG</label>
      <div class="col-md-6">
        <input type="number" name="ppg" id="ppg" class="form-control" value="{{ $malt->ppg }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="color" class="col-sm-4 col-form-label text-md-right">色度</label>
      <div class="col-md-6">
        <input type="number" name="color" id="color" class="form-control" value="{{ $malt->color }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="malts_display_flg" id="is_visibled" class="custom-control-input" value="1" {{ $malt->malts_display_flg ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>

  <div class="d-flex justify-content-start mt-5">
    <div class="align-self-center mr-auto">
      <form method="POST" action="{{ url('/master/malts/' . $malt->id) }}"
            onsubmit="return confirm('本当に削除しますか？')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">この麦芽を削除</button>
      </form>
    </div>
  </div>
</div>
@endsection

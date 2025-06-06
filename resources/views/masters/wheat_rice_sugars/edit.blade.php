@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container">
    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">麦・米・糖類の編集</span>
      </div>
      <div class="align-self-center mr-2">
        <button type="submit" class="btn btn-primary" form="editForm" style="width: 10rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="/master/wheat_rice_sugars" class="btn btn-dark">戻る</a>
      </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('/master/wheat_rice_sugars/' . $wheat_rice_sugar->id) }}" id="editForm">
      @csrf
      @method('PUT')

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label text-md-right">名前</label>
        <div class="col-md-6">
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $wheat_rice_sugar->name) }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="maker" class="col-sm-2 col-form-label text-md-right">メーカー</label>
        <div class="col-md-6">
          <input type="text" name="maker" id="maker" class="form-control" value="{{ old('maker', $wheat_rice_sugar->maker) }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="ppg" class="col-sm-2 col-form-label text-md-right">PPG</label>
        <div class="col-md-6">
          <input type="number" name="ppg" id="ppg" class="form-control" value="{{ old('ppg', $wheat_rice_sugar->ppg) }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="color" class="col-sm-2 col-form-label text-md-right">色度</label>
        <div class="col-md-6">
          <input type="number" name="color" id="color" class="form-control" value="{{ old('color', $wheat_rice_sugar->color) }}">
        </div>
      </div>

      <div class="d-flex justify-content-center mt-3">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="wheat_rice_sugar_display_flg" id="wheat_rice_sugar_display_flg" class="custom-control-input"
            value="1" {{ old('wheat_rice_sugar_display_flg', $wheat_rice_sugar->wheat_rice_sugar_display_flg) ? 'checked' : '' }}>
          <label class="custom-control-label" for="wheat_rice_sugar_display_flg">表示する</label>
        </div>
      </div>
    </form>

    <form method="POST" action="{{ url('/master/wheat_rice_sugars/' . $wheat_rice_sugar->id) }}" class="mt-5">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-outline-danger" onclick="return confirm('削除してもよろしいですか？')">この麦・米・糖類を削除</button>
    </form>
  </div>
</div>

@if (session('msg'))
<script>
  alert('{{ session('msg') }}');
</script>
@endif
@endsection

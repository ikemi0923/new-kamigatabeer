@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2>麦芽の登録</h2>

      {{-- 成功メッセージ --}}
      @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('msg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
        </div>
      @endif

      {{-- エラーメッセージ --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ url('/master/malts') }}">
        @csrf

        <div class="form-group">
          <label for="name">名前</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
          <label for="maker">メーカー</label>
          <input type="text" class="form-control" id="maker" name="maker" value="{{ old('maker') }}">
        </div>

        <div class="form-group">
          <label for="ppg">PPG</label>
          <input type="number" class="form-control" id="ppg" name="ppg" value="{{ old('ppg') }}">
        </div>

        <div class="form-group">
          <label for="color">色度</label>
          <input type="number" class="form-control" id="color" name="color" value="{{ old('color') }}">
        </div>

        <div class="form-group form-check mt-3">
          <input type="checkbox" class="form-check-input" id="malts_display_flg" name="malts_display_flg" value="1" {{ old('malts_display_flg') ? 'checked' : '' }}>
          <label class="form-check-label" for="malts_display_flg">表示する</label>
        </div>

        <button type="submit" class="btn btn-primary">保存</button>
        <a href="{{ url('/master/malts') }}" class="btn btn-dark">戻る</a>
      </form>
    </div>
  </div>
</div>
@endsection

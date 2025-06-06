@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージのポップ --}}
  @if (session('msg'))
    <script>
      alert(@json(session('msg')));
    </script>
  @endif

  {{-- バリデーションエラー表示 --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ url('/master/hops') }}" id="createForm">
    @csrf

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">ホップの登録</span>
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
      <label for="alpha" class="col-sm-4 col-form-label text-md-right">α酸(%)</label>
      <div class="col-md-6">
        <input type="number" name="alpha" id="alpha" class="form-control" value="{{ old('alpha') }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="hops_display_flg" id="is_visibled" class="custom-control-input" value="1" {{ old('hops_display_flg') ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>
</div>
@endsection

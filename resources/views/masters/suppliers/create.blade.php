@extends('layouts.app')

@section('content')
<div class="container">

  @if (session('msg'))
    <script>
      alert(@json(session('msg')));
    </script>
  @endif

  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">取引先の新規追加</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" form="createForm" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('suppliers.index') }}" class="btn btn-dark">戻る</a>
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

  <form method="POST" id="createForm" action="{{ route('suppliers.store') }}">
    @csrf

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="type" class="col-sm-2 col-form-label text-md-right">種類</label>
      <div class="col-md-6">
        <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="category" class="col-sm-2 col-form-label text-md-right">区分</label>
      <div class="col-md-6">
        <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}">
      </div>
    </div>
<!-- 
    <div class="form-group row">
      <div class="col-md-6 offset-md-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="display_flg" id="display_flg"
            {{ old('display_flg') ? 'checked' : '' }}>
          <label class="form-check-label" for="display_flg">
            表示する
          </label>
        </div>
      </div>
    </div> -->
  </form>

</div>
@endsection

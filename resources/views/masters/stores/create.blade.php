@extends('layouts.app')

@section('content')
<div class="container">

  @if (session('msg'))
    <script>alert(@json(session('msg')));</script>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('stores.store') }}">
    @csrf

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">店舗の登録</span>
      </div>
      <div class="align-self-center mr-3">
        <button type="submit" class="btn btn-primary" style="width: 8rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ url('/master/stores') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名称</label>
      <div class="col-sm-6">
        <input type="text" name="store_name" class="form-control" value="{{ old('store_name') }}">
      </div>
    </div>

    <div class="form-group row justify-content-center mt-4">
      <label class="col-sm-2 col-form-label text-right">記号の選択</label>
      <div class="col-sm-8">
        <div class="row">
          @foreach ($symbols as $symbol)
            <div class="col-md-3">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="symbol_ids[]" value="{{ $symbol->id }}" id="symbol{{ $symbol->id }}">
                <label class="form-check-label" for="symbol{{ $symbol->id }}">{{ $symbol->symbol_name }}</label>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

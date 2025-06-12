@extends('layouts.app')

@section('content')
<div class="container">

  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">タンクの新規追加</span>
    </div>
    <div class="align-self-center mr-3">
      <button type="submit" class="btn btn-primary" form="createForm" style="width: 8rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('tanks.index') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

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

  {{-- 登録フォーム --}}
  <form method="POST" action="{{ route('tanks.store') }}" id="createForm">
    @csrf

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名称</label>
      <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      </div>
    </div>
  </form>

</div>
@endsection
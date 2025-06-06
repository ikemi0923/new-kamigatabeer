@extends('layouts.app')

@section('content')
<div class="container">

  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">担当者の新規追加</span>
    </div>
    <div class="align-self-center mr-3">
      <button type="submit" class="btn btn-primary" form="createForm">保存</button>
    </div>
    <div class="align-self-center">
      <a href="{{ route('employees.index') }}" class="btn btn-dark">戻る</a>
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

  <form method="POST" action="{{ route('employees.store') }}" id="createForm">
    @csrf

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">姓</label>
      <div class="col-sm-6">
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名</label>
      <div class="col-sm-6">
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
      </div>
    </div>
  </form>
</div>
@endsection

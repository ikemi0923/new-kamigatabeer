@extends('layouts.app')

@section('content')
<div class="container">

  {{-- メッセージ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
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

  {{-- 編集フォーム --}}
  <form method="POST" action="{{ route('employees.update', $employee->id) }}">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">担当者の編集</span>
      </div>
      <div class="align-self-center mr-3">
        <button type="submit" class="btn btn-primary" style="width: 8rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ route('employees.index') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">姓</label>
      <div class="col-sm-6">
        <input type="text" name="last_name" class="form-control"
          value="{{ old('last_name', $employee->last_name) }}">
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名</label>
      <div class="col-sm-6">
        <input type="text" name="first_name" class="form-control"
          value="{{ old('first_name', $employee->first_name) }}">
      </div>
    </div>
  </form>

  {{-- 削除ボタン --}}
  <form method="POST" action="{{ route('employees.destroy', $employee->id) }}"
    onsubmit="return confirm('本当に削除しますか？');" class="mt-3">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
  </form>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">

  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
  </div>
  @endif


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">担当者一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('employees.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> 新規追加
      </a>
    </div>
    <div class="align-self-center">
      <a href="/master" class="btn btn-dark">戻る</a>
    </div>
  </div>

  <table class="table table-striped text-center align-middle">
    <thead>
      <tr>
        <th>名称</th>
        <th>店舗</th>
        <th>操作</th> {{-- ← 追加 --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($employees as $employee)
      <tr>
        <td>{{ $employee->last_name }} {{ $employee->first_name }}</td>
        <td>{{ $employee->store->store_name ?? '' }}</td>
        <td>
          <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
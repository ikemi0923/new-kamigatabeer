@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
    <script>
      alert(@json(session('msg')));
    </script>
  @endif

  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">タンク一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('tanks.create') }}" class="btn btn-primary">
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
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tanks as $tank)
        <tr>
          <td>{{ $tank->name }}</td>
          <td>
            <a href="{{ route('tanks.edit', $tank->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection

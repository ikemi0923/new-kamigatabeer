@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif


  {{-- ヘッダーとボタン（左右に分離） --}}
  <div class="d-flex justify-content-between mb-3">
    <div>
      <span class="span-header">ユーザー一覧</span>
    </div>
    <div>
      <a href="{{ route('users.create') }}" class="btn btn-primary me-2">
        <i class="fas fa-plus"></i> 新規追加
      </a>
      <a href="/menu" class="btn btn-dark">戻る</a>
    </div>
  </div>

  {{-- ユーザー一覧テーブル --}}
  <table class="table table-sm table-striped">
    <thead>
      <tr>
        <th class="text-center">ユーザID</th>
        <th class="text-center">店舗</th>
        <th class="text-center">管理者</th>
        <th class="text-center">操作</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($users as $user)
      <tr>
        <td class="text-center align-middle">{{ $user->user_id }}</td>
        <td class="text-center align-middle">{{ $user->store->store_name ?? '' }}</td>
        <td class="text-center align-middle">{{ $user->is_admin ? '〇' : '' }}</td>
        <td class="text-center align-middle">
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
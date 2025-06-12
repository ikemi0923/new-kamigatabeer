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


  {{-- タイトルとボタン --}}
  <div class="d-flex justify-content-between mb-3">
    <div>
      <span class="span-header">ユーザ情報</span>
    </div>
    <div>
      <button type="submit" class="btn btn-primary me-2" form="editForm">保存</button>
      <a href="{{ route('users.index') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

  {{-- エラー表示 --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- 中央寄せフォーム --}}
  <div class="row justify-content-center">
    <div class="col-md-8">

      <form method="POST" action="{{ route('users.update', $user->id) }}" id="editForm">
        @csrf
        @method('PUT')

        {{-- ユーザID --}}
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">ユーザID <span class="badge bg-danger text-white">必須</span></label>
          <div class="col-sm-9">
            <input type="text" name="user_id" class="form-control" value="{{ old('user_id', $user->user_id) }}">
          </div>
        </div>

        {{-- パスワード --}}
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">パスワード</label>
          <div class="col-sm-9">
            <input type="password" name="password" class="form-control" placeholder="パスワードを変更する場合のみ入力">
          </div>
        </div>

        {{-- Mail --}}
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Mail</label>
          <div class="col-sm-9">
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
          </div>
        </div>

        {{-- 店舗 --}}
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">店舗</label>
          <div class="col-sm-9">
            <select name="store_id" class="form-select">
              @foreach ($stores as $store)
                <option value="{{ $store->id }}" {{ old('store_id', $user->store_id) == $store->id ? 'selected' : '' }}>
                  {{ $store->store_name }}
                </option>
              @endforeach
            </select>
          </div>
        </div>

        {{-- 権限 --}}
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">権限の選択</label>
          <div class="col-sm-9 d-flex align-items-center">
            <div class="form-check">
              <input type="checkbox" name="is_admin" id="is_admin" class="form-check-input"
                {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>
              <label for="is_admin" class="form-check-label">管理者</label>
            </div>
          </div>
        </div>

      </form>

      {{-- 削除ボタン --}}
      <form method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('本当に削除しますか？');" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">削除</button>
      </form>

    </div>
  </div>

</div>
@endsection

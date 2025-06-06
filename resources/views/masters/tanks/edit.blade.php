@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
    <script>alert(@json(session('msg')));</script>
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
  <form method="POST" action="{{ route('tanks.update', $tank->id) }}" id="editForm">
    @csrf
    @method('PUT')

    <div class="d-flex justify-content-start mb-3">
      <div class="mr-auto">
        <span class="span-header">タンクの編集</span>
      </div>
      <div class="align-self-center mr-3">
        <button type="submit" class="btn btn-primary" style="width: 8rem;">保存</button>
      </div>
      <div class="align-self-center">
        <a href="{{ route('tanks.index') }}" class="btn btn-dark">戻る</a>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label class="col-sm-2 col-form-label text-right">名称</label>
      <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="{{ old('name', $tank->name) }}">
      </div>
    </div>
  </form>

  {{-- 削除ボタン --}}
  <form method="POST" action="{{ route('tanks.destroy', $tank->id) }}" onsubmit="return confirm('本当に削除しますか？');" class="mt-3">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
  </form>

</div>
@endsection

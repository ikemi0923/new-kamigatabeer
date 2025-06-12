@extends('layouts.app')

@section('content')
<div class="container">

  {{-- ポップ通知 --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
  </div>
  @endif


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">ホップ一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ url('/master/hops/create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> 新規追加
      </a>
    </div>
    <div class="align-self-center">
      <a href="{{ url('/master') }}" class="btn btn-dark">戻る</a>
    </div>
  </div>

  <table class="table table-sm table-striped">
    <thead>
      <tr>
        <th class="text-center">名前</th>
        <th class="text-center">メーカー</th>
        <th class="text-center">α酸(%)</th>
        <th class="text-center">表示</th>
        <th class="text-center">操作</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($hops as $hop)
      <tr>
        <td class="text-center align-middle">{{ $hop->name }}</td>
        <td class="text-center align-middle">{{ $hop->maker }}</td>
        <td class="text-center align-middle">{{ $hop->alpha }}</td>
        <td class="text-center align-middle">
          @if ($hop->hops_display_flg)
          <i class="fas fa-check"></i>
          @endif
        </td>
        <td class="text-center align-middle">
          <a href="{{ url('/master/hops/' . $hop->id . '/edit') }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
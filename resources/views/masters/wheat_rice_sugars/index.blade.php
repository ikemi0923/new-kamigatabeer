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


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">麦・米・糖類（三糖類）一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('wheat_rice_sugars.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> 新規追加
      </a>
    </div>
    <div class="align-self-center">
      <a href="/master" class="btn btn-dark">戻る</a>
    </div>
  </div>

  <table class="table table-sm table-striped">
    <thead>
      <tr>
        <th class="text-center">名前</th>
        <th class="text-center">メーカー</th>
        <th class="text-center">PPG</th>
        <th class="text-center">色度</th>
        <th class="text-center">表示</th>
        <th class="text-center">編集</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($wheatRiceSugars as $item)
      <tr>
        <td class="text-center align-middle">{{ $item->name }}</td>
        <td class="text-center align-middle">{{ $item->maker }}</td>
        <td class="text-center align-middle">{{ $item->ppg }}</td>
        <td class="text-center align-middle">{{ $item->color }}</td>
        <td class="text-center align-middle">
          @if ($item->wheat_rice_sugar_display_flg)
          <i class="fas fa-check"></i>
          @endif
        </td>
        <td class="text-center align-middle">
          <a href="{{ route('wheat_rice_sugars.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
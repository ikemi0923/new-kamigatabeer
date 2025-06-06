@extends('layouts.app')

@section('content')
<div class="container">

@if (session('msg'))
    <script>
      alert(@json(session('msg')));
    </script>
  @endif


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">麦芽一覧</span>
    </div>
    <div class="align-self-center mr-3">
    <a href="{{ url('/master/malts/create') }}" class="btn btn-primary">
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
        <th class="text-center">PPG</th>
        <th class="text-center">色度</th>
        <th class="text-center">表示</th>
        <th class="text-center">操作</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($malts as $malt)
      <tr class="clickable">
        <td class="text-center align-middle">{{ $malt->name }}</td>
        <td class="text-center align-middle">{{ $malt->maker }}</td>
        <td class="text-center align-middle">{{ $malt->ppg }}</td>
        <td class="text-center align-middle">{{ $malt->color }}</td>
        <td class="text-center align-middle">
          @if ($malt->malts_display_flg)
            <i class="fas fa-check"></i>
          @endif
        </td>
        <td class="text-center align-middle">
          <a href="{{ url('/master/malts/' . $malt->id . '/edit') }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-between align-items-center mt-3">
    {{ $malts->links() }}
  </div>
</div>
@endsection

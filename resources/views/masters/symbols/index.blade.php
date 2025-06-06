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
      <span class="span-header">記号一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ url('/master/symbols/create') }}" class="btn btn-primary">
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
        <th class="text-center">名称</th>
        <th class="text-center">銘柄</th>
        <th class="text-center">品目</th>
        <th class="text-center">店舗</th>
        <th class="text-center">操作</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($symbols as $symbol)
      <tr class="clickable">
        <td class="text-center align-middle">{{ $symbol->name }}</td>
        <td class="text-center align-middle">{{ $symbol->brand }}</td>

        <td class="text-center align-middle">
          {{ $symbol->item_id == 1 ? 'ビール' :
     ($symbol->item_id == 2 ? '発泡酒50以上' :
     ($symbol->item_id == 3 ? '発泡酒50〜25' :
     ($symbol->item_id == 4 ? '発泡酒25以下' : ''))) }}
        </td>

        <td class="text-center align-middle">
          {{ $symbol->stores->pluck('store_name')->implode('、') }}
        </td>

        <td class="text-center align-middle">
          <a href="{{ url('/master/symbols/' . $symbol->id . '/edit') }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
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
      <span class="span-header">商品一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('items.create') }}" class="btn btn-primary">
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
        <th class="text-center">商品名</th>
        <th class="text-center">ビアスタイル</th>
        <th class="text-center">ABV</th>
        <th class="text-center">IBU</th>
        <th class="text-center">操作</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($items as $item)
      <tr class="clickable">
        <td class="text-center align-middle">{{ $item->name }}</td>
        <td class="text-center align-middle">{{ $item->beer_style }}</td>
        <td class="text-center align-middle">{{ $item->abv }}</td>
        <td class="text-center align-middle">{{ $item->ibu }}</td>
        <td class="text-center align-middle">
          <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- ページネーション --}}
  <div class="d-flex justify-content-between align-items-center mt-3">
    {{ $items->links() }}
  </div>

</div>
@endsection

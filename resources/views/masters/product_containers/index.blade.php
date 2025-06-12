@extends('layouts.app')

@section('content')
<div class="container">

  {{-- 成功メッセージ --}}
  @if (session('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
  </div>
  @endif


  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">商品容器一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('product_containers.create') }}" class="btn btn-primary">
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
        <th class="text-center">容量</th>
        <th class="text-center">表示</th>
        <th class="text-center">編集</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($productContainers as $productContainer)
      <tr class="clickable">
        <td class="text-center align-middle">{{ $productContainer->name }}</td>
        <td class="text-center align-middle">{{ $productContainer->capacity }}</td>
        <td class="text-center align-middle">
          @if ($productContainer->product_container_display_flg)
          <i class="fas fa-check"></i>
          @endif
        </td>
        <td class="text-center align-middle">
          <a href="{{ route('product_containers.edit', $productContainer->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
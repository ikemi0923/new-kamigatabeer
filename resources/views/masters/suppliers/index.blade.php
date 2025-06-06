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
      <span class="span-header">取引先一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
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
        <th class="text-center">種類</th>
        <th class="text-center">区分</th>
        <!-- <th class="text-center">表示</th> -->
        <th class="text-center">編集</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($suppliers as $supplier)
      <tr>
        <td class="text-center align-middle">{{ $supplier->name }}</td>
        <td class="text-center align-middle">{{ $supplier->type }}</td>
        <td class="text-center align-middle">{{ $supplier->category }}</td>
        <!-- <td class="text-center align-middle">{{ $supplier->display_flg ? '〇' : '' }}</td> -->
        <td class="text-center align-middle">
          <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection

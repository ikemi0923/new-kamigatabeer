@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">副原料一覧</span>
    </div>
    <div class="align-self-center mr-3">
      <a href="/master/auxiliary_raw_materials/create" class="btn btn-primary">
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
        <th class="text-center">表示</th>
        <th class="text-center">編集</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      @foreach ($auxiliary_raw_materials as $material)
      <tr class="clickable">
        <td class="text-center align-middle">{{ $material->name }}</td>
        <td class="text-center align-middle">{{ $material->maker }}</td>
        <td class="text-center align-middle">
          @if ($material->auxiliary_raw_material_display_flg)
            <i class="fas fa-check"></i>
          @endif
        </td>
        <td class="text-center align-middle">
          <a href="{{ url('/master/auxiliary_raw_materials/edit', $material->id) }}" class="btn btn-sm btn-outline-primary">編集</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

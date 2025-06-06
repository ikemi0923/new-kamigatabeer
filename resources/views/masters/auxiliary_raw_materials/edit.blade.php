@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">副原料の編集</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" style="width: 10rem;" form="editForm">保存</button>
    </div>
    <div class="align-self-center">
      <a href="/master/auxiliary_raw_materials" class="btn btn-dark">戻る</a>
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" id="editForm" action="/master/auxiliary_raw_materials/finish/{{ $auxiliary_raw_material->id }}">
    @csrf
    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $auxiliary_raw_material->name) }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="maker" class="col-sm-4 col-form-label text-md-right">メーカー</label>
      <div class="col-md-6">
        <input type="text" name="maker" id="maker" class="form-control" value="{{ old('maker', $auxiliary_raw_material->maker) }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="auxiliary_raw_material_display_flg" id="is_visibled" class="custom-control-input"
          value="1" {{ old('auxiliary_raw_material_display_flg', $auxiliary_raw_material->auxiliary_raw_material_display_flg) ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>

  <div class="d-flex justify-content-start mt-5">
    <div class="align-self-center mr-auto">
      <form method="POST" action="/master/auxiliary_raw_materials/delete/{{ $auxiliary_raw_material->id }}" onsubmit="return confirm('本当に削除しますか？')">
        @csrf
        <button type="submit" class="btn btn-outline-danger">この副原料を削除</button>
      </form>
    </div>
  </div>
</div>
@endsection

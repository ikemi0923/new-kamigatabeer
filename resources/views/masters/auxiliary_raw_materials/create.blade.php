@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-start mb-3">
    <div class="mr-auto">
      <span class="span-header">副原料の登録</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" class="btn btn-primary" form="createForm" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="/master/auxiliary_raw_materials" class="btn btn-dark">戻る</a>
    </div>
  </div>

  @if (session('msg'))
  <script>
    alert('{{ session('
      msg ') }}');
  </script>
  @endif


  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="POST" action="/master/auxiliary_raw_materials/add" id="createForm">
    @csrf
    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label text-md-right">名前</label>
      <div class="col-md-6">
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="maker" class="col-sm-4 col-form-label text-md-right">メーカー</label>
      <div class="col-md-6">
        <input type="text" name="maker" id="maker" class="form-control" value="{{ old('maker') }}">
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="text-center custom-control custom-checkbox">
        <input type="checkbox" name="auxiliary_raw_material_display_flg" id="is_visibled" class="custom-control-input" value="1" {{ old('auxiliary_raw_material_display_flg') ? 'checked' : '' }}>
        <label for="is_visibled" class="custom-control-label">表示する</label>
      </div>
    </div>
  </form>
</div>

@if (!empty($msg))
<script>
  alert('保存完了しました');
</script>
@endif
@endsection
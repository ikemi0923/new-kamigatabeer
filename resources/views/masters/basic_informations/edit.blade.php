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
      <span class="span-header">基本情報の編集</span>
    </div>
    <div class="align-self-center mr-2">
      <button type="submit" form="editForm" class="btn btn-primary" style="width: 10rem;">保存</button>
    </div>
    <div class="align-self-center">
      <a href="/master" class="btn btn-dark">戻る</a>
    </div>
  </div>

  {{-- バリデーションエラー --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="POST" id="editForm" action="{{ route('basic_information.update') }}">
    @csrf
    @method('PUT')

    @php
    $fields = [
    'office_name' => '事業所名',
    'office_code' => '郵便番号（事業所）',
    'office_address' => '住所（事業所）',
    'office_phone_number' => '電話番号（事業所）',
    'representative_name' => '代表者氏名',
    'factory_name' => '工場名',
    'factory_code' => '郵便番号（工場）',
    'factory_address' => '住所（工場）',
    'factory_phone_number' => '電話番号（工場）',
    'tax_office' => '税務署',
    'tax_accountant' => '税理士',
    'tax_phone_number' => '税理士電話番号'
    ];
    @endphp

    @foreach ($fields as $field => $label)
    <div class="form-group row">
      <label for="{{ $field }}" class="col-sm-2 col-form-label text-md-right">{{ $label }}</label>
      <div class="col-md-6">
        <input id="{{ $field }}" type="text" class="form-control" name="{{ $field }}" value="{{ old($field, $basicInformation->$field ?? '') }}">
      </div>
    </div>
    @endforeach

    {{-- チェックボックス --}}
    @php
    $checks = [
    'thirty_flg' => '30条該当',
    'thirty_three_flg' => '33条該当',
    'special_adaptation_manufacturer_flg' => '特例適用製造者'
    ];
    @endphp

    @foreach ($checks as $field => $label)
    <div class="form-group row">
      <div class="col-md-6 offset-md-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="{{ $field }}" id="{{ $field }}"
            {{ old($field, $basicInformation->$field ?? false) ? 'checked' : '' }}>
          <label class="form-check-label" for="{{ $field }}">
            {{ $label }}
          </label>
        </div>
      </div>
    </div>
    @endforeach

  </form>
</div>
@endsection
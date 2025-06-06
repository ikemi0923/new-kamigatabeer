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
      <span class="span-header">基本情報</span>
    </div>
    <div class="align-self-center">
      <a href="{{ route('basic_information.edit') }}" class="btn btn-primary">
        <i class="fas fa-edit"></i> 編集
      </a>
    </div>
    <div class="align-self-center ml-2">
      <a href="/master" class="btn btn-dark">戻る</a>
    </div>
  </div>

  <table class="table table-bordered table-sm">
    <tbody>
      <tr>
        <th>事業所名</th>
        <td>{{ $basicInformation->office_name ?? '' }}</td>
      </tr>
      <tr>
        <th>郵便番号（事業所）</th>
        <td>{{ $basicInformation->office_code ?? '' }}</td>
      </tr>
      <tr>
        <th>住所（事業所）</th>
        <td>{{ $basicInformation->office_address ?? '' }}</td>
      </tr>
      <tr>
        <th>電話番号（事業所）</th>
        <td>{{ $basicInformation->office_phone_number ?? '' }}</td>
      </tr>
      <tr>
        <th>代表者氏名</th>
        <td>{{ $basicInformation->representative_name ?? '' }}</td>
      </tr>
      <tr>
        <th>工場名</th>
        <td>{{ $basicInformation->factory_name ?? '' }}</td>
      </tr>
      <tr>
        <th>郵便番号（工場）</th>
        <td>{{ $basicInformation->factory_code ?? '' }}</td>
      </tr>
      <tr>
        <th>住所（工場）</th>
        <td>{{ $basicInformation->factory_address ?? '' }}</td>
      </tr>
      <tr>
        <th>電話番号（工場）</th>
        <td>{{ $basicInformation->factory_phone_number ?? '' }}</td>
      </tr>
      <tr>
        <th>税務署</th>
        <td>{{ $basicInformation->tax_office ?? '' }}</td>
      </tr>
      <tr>
        <th>税理士</th>
        <td>{{ $basicInformation->tax_accountant ?? '' }}</td>
      </tr>
      <tr>
        <th>税理士電話番号</th>
        <td>{{ $basicInformation->tax_phone_number ?? '' }}</td>
      </tr>
      <tr>
        <th>30条該当</th>
        <td>{{ $basicInformation->thirty_flg ? '◯' : '✕' }}</td>
      </tr>
      <tr>
        <th>33条該当</th>
        <td>{{ $basicInformation->thirty_three_flg ? '◯' : '✕' }}</td>
      </tr>
      <tr>
        <th>特例適用製造者</th>
        <td>{{ $basicInformation->special_adaptation_manufacturer_flg ? '◯' : '✕' }}</td>
      </tr>
    </tbody>
  </table>

</div>
@endsection

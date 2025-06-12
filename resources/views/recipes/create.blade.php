@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">仕込レシピ 新規作成</h1>

    {{-- 成功メッセージ --}}
    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf

        {{-- 基本情報 --}}
        <div class="mb-3">
            <label>仕込名</label>
            <input type="text" name="recipe_name" class="form-control" value="{{ old('recipe_name') }}">
        </div>

        <div class="mb-3">
            <label>仕込日</label>
            <input type="date" name="brewed_at" class="form-control" value="{{ old('brewed_at') }}">
        </div>

        <div class="mb-3">
            <label>商品</label>
            <select name="item_id" class="form-control">
                <option value="">選択してください</option>
                @foreach ($items as $item)
                    <option value="{{ $item->id }}" {{ old('item_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>タンク</label>
            <select name="tank_id" class="form-control">
                <option value="">選択してください</option>
                @foreach ($tanks as $tank)
                    <option value="{{ $tank->id }}" {{ old('tank_id') == $tank->id ? 'selected' : '' }}>
                        {{ $tank->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- 各原料セクションをまとめて追加 --}}
        @include('recipes.partials.malts')
        @include('recipes.partials.hops')
        @include('recipes.partials.yeasts')
        @include('recipes.partials.auxiliary_raw_materials')
        @include('recipes.partials.wheat_rice_sugars')

        <button type="submit" class="btn btn-primary">保存</button>
        <a href="{{ route('recipes.index') }}" class="btn btn-secondary">戻る</a>
    </form>
</div>

{{-- JavaScript --}}
<script>
    let maltIndex = 1;
    function addMaltRow() {
        const tableBody = document.getElementById('malt-table-body');
        const row = `...`; // モルト行のHTML
        tableBody.insertAdjacentHTML('beforeend', row);
        maltIndex++;
    }

    let hopIndex = 1;
    function addHopRow() {
        const tableBody = document.getElementById('hop-table-body');
        const row = `...`; // ホップ行のHTML
        tableBody.insertAdjacentHTML('beforeend', row);
        hopIndex++;
    }

    let yeastIndex = 1;
    function addYeastRow() {
        const tableBody = document.getElementById('yeast-table-body');
        const row = `...`; // 酵母行のHTML
        tableBody.insertAdjacentHTML('beforeend', row);
        yeastIndex++;
    }

    let auxIndex = 1;
    function addAuxRow() {
        const tableBody = document.getElementById('auxiliary-table-body');
        const row = `...`; // 副原料行のHTML
        tableBody.insertAdjacentHTML('beforeend', row);
        auxIndex++;
    }

    let wrsIndex = 1;
    function addWrsRow() {
        const tableBody = document.getElementById('wrs-table-body');
        const row = `...`; // 米・小麦・糖行のHTML
        tableBody.insertAdjacentHTML('beforeend', row);
        wrsIndex++;
    }

    function removeRow(button) {
        button.closest('tr').remove();
    }
</script>
@endsection

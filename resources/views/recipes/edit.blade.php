@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">仕込レシピ 編集</h1>

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

    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- 基本情報 --}}
        <div class="mb-3">
            <label>仕込名</label>
            <input type="text" name="recipe_name" class="form-control" value="{{ old('recipe_name', $recipe->recipe_name) }}">
        </div>

        <div class="mb-3">
            <label>仕込日</label>
            <input type="date" name="brewed_at" class="form-control" value="{{ old('brewed_at', $recipe->brewed_at) }}">
        </div>

        <div class="mb-3">
            <label>商品</label>
            <select name="item_id" class="form-control">
                @foreach ($items as $item)
                    <option value="{{ $item->id }}" {{ $item->id == old('item_id', $recipe->item_id) ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>タンク</label>
            <select name="tank_id" class="form-control">
                @foreach ($tanks as $tank)
                    <option value="{{ $tank->id }}" {{ $tank->id == old('tank_id', $recipe->tank_id) ? 'selected' : '' }}>
                        {{ $tank->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- 各原料セクション --}}
        @include('recipes.partials.edit_malts')
        @include('recipes.partials.edit_hops')
        @include('recipes.partials.edit_yeasts')
        @include('recipes.partials.edit_auxiliary_raw_materials')
        @include('recipes.partials.edit_wheat_rice_sugars')

        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ route('recipes.index') }}" class="btn btn-secondary">戻る</a>
    </form>
</div>

<script>
    function removeRow(button) {
        button.closest('tr').remove();
    }
</script>
@endsection

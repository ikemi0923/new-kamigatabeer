@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">仕込レシピ 新規作成</h1>

    @if (session('msg'))
        <script>alert('{{ session('msg') }}');</script>
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

        {{-- モルト入力欄 --}}
        <div class="mb-4">
            <label>モルト</label>
            <table class="table">
                <thead>
                    <tr>
                        <th>モルト</th>
                        <th>使用量(g)</th>
                        <th>比率(%)</th>
                        <th>備考</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody id="malt-table-body">
                    <tr>
                        <td>
                            <select name="malts[0][malt_id]" class="form-control">
                                @foreach ($malts as $malt)
                                    <option value="{{ $malt->id }}">{{ $malt->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input type="number" name="malts[0][amount]" class="form-control"></td>
                        <td><input type="number" step="0.01" name="malts[0][ratio]" class="form-control"></td>
                        <td><input type="text" name="malts[0][note]" class="form-control"></td>
                        <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">削除</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-outline-primary" onclick="addMaltRow()">＋ 行追加</button>
        </div>

        {{-- ホップ入力欄 --}}
        <div class="mb-4">
            <label>ホップ</label>
            <table class="table">
                <thead>
                    <tr>
                        <th>ホップ</th>
                        <th>使用量(g)</th>
                        <th>α酸(%)</th>
                        <th>IBU</th>
                        <th>煮沸時間(min)</th>
                        <th>備考</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody id="hop-table-body">
                    <tr>
                        <td>
                            <select name="hops[0][hop_id]" class="form-control">
                                @foreach ($hops as $hop)
                                    <option value="{{ $hop->id }}">{{ $hop->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input type="number" name="hops[0][amount]" class="form-control"></td>
                        <td><input type="number" step="0.01" name="hops[0][alpha_acid]" class="form-control"></td>
                        <td><input type="number" step="0.01" name="hops[0][ibu]" class="form-control"></td>
                        <td><input type="number" name="hops[0][boil_time]" class="form-control"></td>
                        <td><input type="text" name="hops[0][note]" class="form-control"></td>
                        <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">削除</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-outline-primary" onclick="addHopRow()">＋ 行追加</button>
        </div>

        {{-- 保存ボタン --}}
        <button type="submit" class="btn btn-primary">保存</button>
        <a href="{{ route('recipes.index') }}" class="btn btn-secondary">戻る</a>
    </form>
</div>

{{-- JavaScript --}}
<script>
    let maltIndex = 1;
    function addMaltRow() {
        const tableBody = document.getElementById('malt-table-body');
        const row = `
            <tr>
                <td>
                    <select name="malts[${maltIndex}][malt_id]" class="form-control">
                        @foreach ($malts as $malt)
                            <option value="{{ $malt->id }}">{{ $malt->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td><input type="number" name="malts[${maltIndex}][amount]" class="form-control"></td>
                <td><input type="number" step="0.01" name="malts[${maltIndex}][ratio]" class="form-control"></td>
                <td><input type="text" name="malts[${maltIndex}][note]" class="form-control"></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">削除</button></td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
        maltIndex++;
    }

    let hopIndex = 1;
    function addHopRow() {
        const tableBody = document.getElementById('hop-table-body');
        const row = `
            <tr>
                <td>
                    <select name="hops[${hopIndex}][hop_id]" class="form-control">
                        @foreach ($hops as $hop)
                            <option value="{{ $hop->id }}">{{ $hop->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td><input type="number" name="hops[${hopIndex}][amount]" class="form-control"></td>
                <td><input type="number" step="0.01" name="hops[${hopIndex}][alpha_acid]" class="form-control"></td>
                <td><input type="number" step="0.01" name="hops[${hopIndex}][ibu]" class="form-control"></td>
                <td><input type="number" name="hops[${hopIndex}][boil_time]" class="form-control"></td>
                <td><input type="text" name="hops[${hopIndex}][note]" class="form-control"></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">削除</button></td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
        hopIndex++;
    }

    function removeRow(button) {
        button.closest('tr').remove();
    }
</script>
@endsection

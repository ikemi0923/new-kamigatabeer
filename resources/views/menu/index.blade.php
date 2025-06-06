<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メニュー画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>メニュー画面</h1>

    <div class="menu-buttons">
        <a href="/material" class="menu-button blue">原料</a>
        <a href="/process" class="menu-button blue">仕込</a>
        <a href="/product" class="menu-button blue">製品</a>
        <a href="/master" class="menu-button blue">マスター管理</a>
        <a href="/haccp" class="menu-button blue">HACCP</a>
        <a href="/stock" class="menu-button blue">製品容器在庫</a>
    </div>

    <div class="menu-buttons">
        <a href="/form" class="menu-button green">帳票出力</a>
        <a href="/qr" class="menu-button green">QRコード読み取り</a>
        <a href="/biareco" class="menu-button green">ビアレコ連携</a>
    </div>

</body>
</html>

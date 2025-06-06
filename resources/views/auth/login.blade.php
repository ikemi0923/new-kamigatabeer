<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン画面</h1>
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="office_code" placeholder="事業所コード"><br>
        <input type="text" name="user_id" placeholder="ユーザーID"><br>
        <input type="password" name="password" placeholder="パスワード"><br>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>

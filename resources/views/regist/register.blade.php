<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ユーザ登録フォーム</title>
</head>

<body>
    <form name="registform" action="/register" method="POST" id=" registform">
        {{ csrf_field() }}
        <dl>
            <dt>名前：</dt>
            <dd>
                <input type="text" name="name" size="30">
                <span>{{ $errors->first('name') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>メールアドレス：</dt>
            <dd>
                <input type="text" name="email" size="30">
                <span>{{ $errors->first('email') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>パスワード：</dt>
            <dd>
                <input type="password" name="password" size="30">
                <span>{{ $errors->first('password') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>パスワード（確認）：</dt>
            <dd>
                <input type="password" name="password_confirmation" size="30">
                <span>{{ $errors->first('password_confirmation') }}</span>
            </dd>
        </dl>
        <button type="submit" name="action" value="send">送信</button>
    </form>
</body>

</html>
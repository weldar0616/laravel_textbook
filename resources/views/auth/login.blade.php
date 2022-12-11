<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ログインフォーム</title>
</head>

<body>
    @isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
    @endisset
    <form name="loginform" action="/login" method="POST">
        {{ csrf_field() }}
        <dl>
            <dt>メールアドレス：</dt>
            <dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
            <dt>パスワード：</dt>
            <dd><input type="password" name="password" size="password"></dd>
        </dl>
        <button type="submit" name="acton" value="send">ログイン</button>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  <title>login</title>
</head>

<header class="header">

    <div class="logo">FashionablyLate</div>
    <a href="http://localhost/register" class=register>register</a>   
    </header>

<body>

    <h1>login</h1>
    <div class="container">
        <form action="" method="post">
            <div>
                <p>メールアドレス</p>
                <input type="text" value="" placeholder="例 test@example.com">
            </div>
            <br>
            <div>
                <p>パスワード</p>
                <input type="password" value="" placeholder="例 coachtech1106">
            </div>
        </form>
        <button class="register_btn" type="button">登録</button>
    </div>

</body>

</html>
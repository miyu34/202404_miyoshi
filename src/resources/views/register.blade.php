<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
  <title>Register</title>
</head>

<header class="header">

    <div class="logo">FashionablyLate</div>
    <a href ="http://localhost/login" class=login_btn>login</a>   
    </header>

<body>

    <h1>Register</h1>
    <div class="container">
        <form action="" method="post">
             <div>
             <p>お名前</p>
                            
             <input type="Username" value="" placeholder="例 山田太郎">
            </div>
            <br>
            <div>
                <p>メールアドレス</p>
                <input type="text" value="" placeholder="例 test@example.com">
            </div>
            <br>
            <di>
                <p>パスワード</p>
                <input type="password" value="" placeholder="例 coachtech1106">
            </di>
        </form>
        <button class="register_btn" type="button">登録</button>
    </div>

</body>

</html>
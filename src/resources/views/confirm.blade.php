<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <?php print_r($contact) ?>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
      <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
              <input type="text" name="name" value="{{ $contact['name'] }}" readonly />              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <p><?php
                if ($_POST['gender'] === 1) {
                  echo "女性";
                }else{
                  echo "男性";
                } ?>
                </p>
                </tr>
              </td>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
               <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
              <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
              </td>
            </tr>
            
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="adrress" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly />
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
              <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
            </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
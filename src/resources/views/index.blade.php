<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="例 山田" />
              <input type="text" name="name" placeholder="例 太郎" />

            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">性別</span>
             <span class="form__label--required">※</span>
           </div>
           <input class=form__group-content-gender type="radio" name="gender" id="1" value="1" checked><label>男性</label>
           <input class=form__group-content-gender  type="radio" name="gender" id="2" value="2"><label>女性</label>
             <div class="form__error">
               @error('gender')
               {{ $message }}
               @enderror
             </div>
           </div>
         </div>
         <br>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例 test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">住所</span>
             <span class="form__label--required">※</span>
           </div>
           <div class="form__group-content">
             <div class="form__input--text">
               <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
             </div>
             <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
             </div>
           </div>
         </div>
         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">建物名</span>
           </div>
           <div class="form__group-content">
             <div class="form__input--text">
               <input type="text" name="address" placeholder="例 千駄ヶ谷マンション101" value="{{ old('address') }}" />
             </div>
             <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
             </div>
           </div>
         </div>

         <div class="form__group">
           <div class="form__group-title">
             <span class="form__label--item">お問い合わせの種類</span>
             <span class="form__label--required">※</span>
           </div>
           <select class="form__group-content">
　　　　　　<option value="" selected>選択してください</option>
           <option value="商品のお届けについて">商品のお届けについて</option>
           <option value="商品の交換について">商品の交換について</option>
           <option value="商品トラブル">商品トラブル</option>
           <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
           <option value="その他">その他</option>
             <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
             </div>
           </select>
         </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>            
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>


</html>
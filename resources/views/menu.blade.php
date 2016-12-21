<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>メニュー</title>
<link rel="stylesheet" href="css/piza.css">
    </head>
    <body>

        <header id="header">
            <!--ロゴ-->
           <a href="/" class="logo">
                <span class="symbol"><img src="images/logo.png" alt="" class="lo"/></span>
            </a>

          <!--ログイン-->
       <div class="a">
            @if (Route::has('login'))
                <div class="login">
                    <a href="{{ url('/login') }}">ログイン</a><br><br>
                    <a href="{{ url('/register') }}">新規登録</a>
                </div>
            @endif
            </div>


        <!--メニューバー -->
        <ul	id="menu">
            <li><a href="/piza">ピザ</a></li>
            <li><a href="#">ドリンク</a></li>
            <li><a href="#">サイドメニュー</a></li>
            <li><a href="#">キャンペーン</a></li>
            <li><a href="#">注文に進む</a></li>
            <li><a href="#">カート</a></li>
        </ul>
        </header><br />
        <div class="moji">
        <P>{{Product->PRO_IMG}}</P>
        <p>{{Product->PRO_NAME}}</p>
<p>M</p>
<p>L</p>
        </div>
    </body>
</html>

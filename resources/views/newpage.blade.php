<!DOCTYPE HTML>

<html>
	<head>
		<title>GAME SHOP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

		<link rel="stylesheet" href="../myassets/css/main.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(function(){
	$("#menubtn").click(function(){
		$("#menu").slideToggle();
	});
});
</script>
	</head>
	<body>
			<!-- ログインメニュー -->
		<nav class="menu">
			  @if (Route::has('login'))
		<ul>
  <li><a href="{{ url('/user/login') }}">ログイン</a></li>
  <li><a href="{{ url('/user/register') }}">新規登録</a></li>
</ul>
  @endif
</nav>
<!--　商品メニュー  -->
        <button type="button" id="menubtn">
					menu
				</button>
				<nav class="menu1" id="menu">
        <ul>
            <li><a href="/new">Home</a></li>
            <li><a href="/shop?id=1">PS4</a></li>
            <li><a href="/shop?id=2">WII U</a></li>
            <li><a href="/shop?id=3">PS3</a></li>
            <li><a href="/shop?id=4">3DS</a></li>

        </ul>
    </nav>


		<!-- Header -->
			<section id="header">
				<!--リアルタイムで動く時計の実装-->
				<p id="RealtimeClockArea2">※ここに時計(2桁固定版)が表示されます。</p>
<script type="text/javascript">
function set2fig(num) {
   // 桁数が1桁だったら先頭に0を加えて2桁に調整する
   var ret;
   if( num < 10 ) { ret = "0" + num; }
   else { ret = num; }
   return ret;
}
function showClock2() {
   var nowTime = new Date();
   var nowHour = set2fig( nowTime.getHours() );
   var nowMin = set2fig( nowTime.getMinutes() );
   var nowSec = set2fig( nowTime.getSeconds() );
   var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
   document.getElementById("RealtimeClockArea2").innerHTML = msg;
}
setInterval('showClock2()',1000);
</script>

				<header>
				<br>
					<h1>GAME</h1>
					<p>ゲーム販売サイト</p>
                    <br>
                     <a href="/cart" class="button" style="margin-bottom: 20px;">カートを見る</a>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Proceed</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>This is GAME SHOP</h2>
				</header>
				<p>ゲーム機本体を販売しているWEBショップです。</p><br>
                    <p>当店の魅力として格安・送料無料・即日販売を承ります。</p>
				<footer>
					<a href="#first" class="button style2 scrolly">new models</a>
				</footer>
			</section>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Product List</h2>
					<p>画像をクリックすると詳細ページへ進みます。</p>
				</header>


			          


				<div class="inner gallery">
					<div class="row 0%">


<!-- DBから商品を表示 -->
 @foreach($product as $product)
                        
                        <div class="3u 12u(mobile)">
<a href="/shop?id={{ $product->id }}" class="image fit">
<img src="{{ $product->img }}" style="width:200px;height:200px;"　alt="" /></a></div>

 @endforeach

					</div>

					</div>
			</article>

		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2>Nisl sed ultricies</h2>
					<p>Diam dignissim lectus eu ornare volutpat orci.</p>
				</header>
				<form method="post" action="#">
					<div class="row 50%">
						<div class="6u 12u$(mobile)"><input type="text" class="text" name="name" placeholder="Name" /></div>
						<div class="6u$ 12u$(mobile)"><input type="text" class="text" name="email" placeholder="Email" /></div>
						<div class="12u$">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>
			</article>



		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>

		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

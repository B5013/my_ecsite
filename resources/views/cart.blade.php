<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>カート</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../myassets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<link href="../myassets/css/bootstrap.min.css" rel="stylesheet">
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

        <section id="header">
				<header>
                    <h2>お買い物かご</h2>
            </header>
        <br>
        <a href="/delete/all" class="button" style="margin-bottom: 20px;">カートを空にする</a>

        <br>
        <br>

@if($items)
<?php $totalprice = 0; ?>
<center><table class="table table-bordered" style="width:800px;">
        <thead>
            <tr>

                <th><center>商品名</center></th>
                <th><center>価格</center></th>
								<th></th>
            </tr>
        </thead>
<br>
        <tbody>

    @foreach($items as $index=>$item)

				<tr>

            <td><center>{{ $item->name }}</center></td>
            <td><center>¥ {{ $item->price }}</center></td>
            <td style="text-aligin: center;"><center><a href="/delete?index={{ $index }}">削除</a></center></td>
        </tr>
<?php
$totalprice += "{$item->price}";
 ?>
    @endforeach
        </tbody>
</table>
</center>
<div align="right"><h3>小計  <?php echo "¥".$totalprice; ?></h3></div>
  <div align="right"><h3>合計金額(税込)  <?php echo "¥".$totalprice*1.08; ?></h3></div>
@else
    <p>商品が入っていません</p>
@endif

<br><br><br><br>

<a href="/new" ><input type="button" value="買い物を続ける" /></a>
<a href="#" ><input type="button" value="購入手続きへ" /></a>

        </section>
</body>
</html>

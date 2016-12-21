<!DOCTYPE HTML>

<html>
	<head>
        <title>更新ページ</title>
        <link href="../myassets/css/bootstrap.min.css" rel="stylesheet">
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
				<link rel="stylesheet" href="asset/css/main.css" />
				<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="homepage">
			<div id="features-wrapper">
			<section id="features" class="container">
     <center><h2>商品編集画面</h2></center>

         <form action="/update/any" method="post">
        <p><input type="hidden" name="id" value="{{$product->id}}"></p>
        <p>商品名</p>
        <input type="text" name="name" value="{{$product->name }}">
         <p>画像</p>
        <input type="text" name="img" value="{{$product->img }}">
        <p>メーカ</p>
         <input type="text" name="co" value="{{$product->co }}">
        <p>価格</p>
         <input type="text" name="price"value="{{$product->price }}">
         <p>内容</p>
        <textarea cols="200" rows="6"  name="comment">{{$product->comment}}</textarea>
        <p>同梱物</p>
        <textarea cols="200" rows="6"  name="lncludeditems">{{$product->lncludeditems}}</textarea>

<br />

             {{ csrf_field() }}
        <input type="submit" value="更新">

        <a href="/product"><input type="button" value="戻る"></a></form>
			</section>

			</div>
    </body>
</html>

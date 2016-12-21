<!DOCTYPE HTML>

<html>
	<head>
        <title>管理TOP</title>
        <link href="../myassets/css/bootstrap.min.css" rel="stylesheet">
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
				<link rel="stylesheet" href="asset/css/main.css" />
				<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="homepage">
<div id="features-wrapper">
<section id="features" class="container">
	<center><h2>商品詳細画面</h2></center>

       <table class="table table-bordered">
            <tr><th><center>ID</center></th> <td><center>{{$product->id}}</center></td> </tr>

                 <tr><th><center>画像</center></th><td><center>{{$product->img}}</center></td></tr>
                 <tr><th><center>商品名</center></th><td><center>{{$product->name}}</center></td></tr>
                 <tr><th><center>メーカ</center></th> <td><center>{{$product->co}}</center></td></tr>
                 <tr><th><center>価格</center></th> <td><center>¥ {{$product->price}}</center></td></tr>
                 <tr><th><center>内容</center></th><td><center>{{$product->comment}}</center></td></tr>
                <tr><th><center>配送料</center></th>  <td><center>{{$product->postage}}</center></td></tr>
                <tr><th><center>同梱物</center></th><td><center>{{$product->lncludeditems}}</center></td></tr>
            </table>
						<br />
        <a href="/product"><input type="button" value="戻る"></a>
        </section>
				<br /><br /><br /><br /><br />
        </div>
    </body>
</html>

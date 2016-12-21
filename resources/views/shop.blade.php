<!DOCTYPE HTML>
<html>
    <head>
        <title>購入詳細</title>
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

            <a href="/cart" class="button" style="margin-bottom: 20px;">カートを見る</a>
<br>
<br>
        <h2>{{ $product->name }}</h2>
       <br>
        <img src="{{ $product->img }}" alt="" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto"/>

<br>
        <center><table class="table table-bordered"style="width:auto;">
        <thead>
        <tr>
            <th><center>商品内容</center></th>
            <th><center>価格(税込)</center></th>
            <th><center>送料</center></th>
        </tr>
        </thead><br>

        <tbody>
            <tr>
                <td><center>{{$product->comment}}</center></td>
                <td><center>¥ {{$product->price}}</center></td>
                <td><center>{{ $product->postage}}</center></td>
            </tr>
        </tbody>
      </table>
    </center>

            <center><table class="table table-bordered"style="width:auto;">
              <thead>
              <tr>
                  <th><center>同梱物</center></th>
              </tr>
              </thead>
               <tr>
                 <td><center>{{$product->lncludeditems}}</center></td>
               </tr>

             </table></center>

     <form action="/cart?id={{$product->id}}" method="post">
        {{ csrf_field() }}

<a href="/new" ><input type="button" value="一覧に戻る" /></a>
<input type="submit" value="カートに入れる">
        </form>
        <br>

        </section>




    </body>

</html>

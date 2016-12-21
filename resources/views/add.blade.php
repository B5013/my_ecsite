<!DOCTYPE HTML>

<html>
	<head>
        <title>更新ページ</title>
        <link href="../myassets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <center><h2>商品追加画面</h2></center>
        
         <form action="/insert" method="post">
        <p><input type="hidden" name="id" ></p>
        <p>商品名</p>
        <input type="text" name="name" >
         <p>画像</p>
        <input type="text" name="img" >
        <p>メーカ</p>
         <input type="text" name="co" >
        <p>価格</p>
         <input type="text" name="price">
        <p>送料</p>
         <input type="text" name="postage">
         <p>内容</p>
        <textarea cols="200" rows="6"  name="comment"></textarea>
        <p>同梱物</p>
        <textarea cols="200" rows="6"  name="lncludeditems"></textarea>

             
            
<br />
        
             {{ csrf_field() }}
        <input type="submit" value="追加">
        </form>
        <a href="/top"><input type="button" value="戻る"></a>
    </body>
</html>


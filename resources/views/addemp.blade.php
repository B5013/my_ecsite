<!DOCTYPE HTML>

<html>
	<head>
        <title>更新ページ</title>
        <link href="../myassets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <center><h2>従業員追加画面</h2></center>

         <form action="/insertemp" method="post">
        <p><input type="hidden" name="id" ></p>
        <p>名前</p>
        <input type="text" name="name" >
         <p>メール</p>
        <input type="text" name="mail" >
        <p>パスワード</p>
         <input type="text" name="pass" >

<br />

             {{ csrf_field() }}
        <input type="submit" value="追加">
        </form>
        <a href="/emp"><input type="button" value="戻る"></a>
    </body>
</html>

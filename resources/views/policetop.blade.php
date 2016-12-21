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
			<div id="page-wrapper">

				<!-- Header -->
					<div id="header-wrapper">
						<div id="header" class="container">

							<!-- Logo -->
								<h1 id="logo"><a href="/ktop">商品管理画面</a></h1>

							<!-- Nav -->
								<nav id="nav">
									<ul>
										<li><a href="/ktop" class="icon fa-home" href="index.html"><span>Home</span></a></li>
										<li>
											<a href="#" class="icon fa-bar-chart-o"><span>Dropdown</span></a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li>
													<a href="#">Phasellus consequat</a>
													<ul>
														<li><a href="#">Magna phasellus</a></li>
														<li><a href="#">Etiam dolore nisl</a></li>
														<li><a href="#">Phasellus consequat</a></li>
													</ul>
												</li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a class="icon fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
										<li><a class="icon fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
										<li><a class="icon fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
									</ul>
								</nav>

						</div>
					</div>
                <div id="features-wrapper">


 <form action="/search" method="post">
     {{csrf_field()}}
　  <form class="navbar-search pull-left">
  <input type="search" class="search-query" name="name" placeholder="商品名を検索...">
       <input type="submit" value="検索">

        @if($kazu === 1 and count($product) === 0)
           <a href="/product">商品一覧へ</a>
            <h1>商品が見つかりません</h1>
           @elseif($kazu === 1)
           <a href="/product">商品一覧へ</a>
           @endif
        </form>
     </form>

        <br />
        <a href="/add"><button type="submit" class="btn">商品追加</button></a>
        <br /><br />

        <ul id="normal" class="dropmenu">
       <form action="/asc" method="post">
        {{csrf_field()}}
        <button type="submit" class="btn">価格の安い順</button>
        </form>

        <form action="/desc" method="post">
        {{csrf_field()}}
         <button type="submit" class="btn">価格の高い順</button>
        </form>
        </ul>
        <table class="table table-bordered">
            <tr>
                <th><center>ID</center></th>
                 <th><center>商品名</center></th>
                 <th><center>価格</center></th>
                 <th></th>
            </tr>
             @foreach($product as $products)
            <tr>
                <td><center>{{$products->id}}</center></td>
                <td><center>{{$products->name}}</center></td>
                <td><center>¥ {{$products->price}}</center></td>
                 <td><a href="/show?id={{ $products->id }}">詳細表示</a></td>
                <td><a href="/update?id={{ $products->id }}">編集</a></td>
                <td><a href="/topdelete?id={{ $products->id }}">削除</a></td>
            </tr>
            @endforeach
                    </table></div>
                <div id="banner-wrapper">
                    <ul class="actions">
							<li><a href="#" class="button icon fa-file">ページのトップへ</a></li>
						</ul>
                </div>
            </div>
            <!-- Scripts -->
			<script src="asset/js/jquery.min.js"></script>
			<script src="asset/js/jquery.dropotron.min.js"></script>
			<script src="asset/js/skel.min.js"></script>
			<script src="asset/js/skel-viewport.min.js"></script>
			<script src="asset/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="asset/js/main.js"></script>

    </body>
</html>

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
								<h1 id="logo"><a href="/ktop">従業員管理画面</a></h1>

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
					<a href="/addemp"><button type="submit" class="btn">従業員追加</button></a>
        <table class="table table-bordered">
            <tr>
                <th><center>ID</center></th>
                 <th><center>名前</center></th>
                 <th><center>メールアドレス</center></th>
            </tr>
             @foreach($admin as $admins)
            <tr>
                <td><center>{{$admins->id}}</center></td>
                <td><center>{{$admins->name}}</center></td>
                <td><center>{{$admins->email}}</center></td>
              </tr>
            @endforeach
        </table> </div>
        <div id="banner-wrapper">
            <ul class="actions">
      <li><a href="#" class="button icon fa-file">ページのトップへ</a></li>
    </ul>

      </div>

    </div>
    </body>
</html>

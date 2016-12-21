<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>管理画面</title>
		<meta charset="utf-8" />
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
							<h1 id="logo"><a href="/ktop">管理画面</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="/ktop" class="icon fa-home" href="index.html"><span>Home</span></a></li>
									<li>
										<a href="{{ url('/admin/login') }}" class="icon fa-bar-chart-o"><span>Login</span></a>
										<ul>
											<li><a href="">Lorem ipsum dolor</a></li>
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

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">

						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="/product" class="image featured"><img src="images/syohin.jpg" style="width:288px;height:262px;" alt="" /></a>
										<header>
											<h3>商品管理</h3>
										</header>
										<p>商品の検索・追加・編集・削除ができます。</p>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="/user" class="image featured"><img src="images/kokyaku.jpg" style="width:288px;height:262px;" alt="" /></a>
										<header>
											<h3>顧客管理</h3>
										</header>
										<p>顧客の情報を確認できます。</p>
									</section>

							</div>

                            <div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="/emp" class="image featured"><img src="images/emp.jpg" style="width:288px;height:262px;" alt="" /></a>
										<header>
											<h3>従業員管理</h3>
										</header>
										<p>従業員の情報を確認できます。</p>
									</section>

							</div>
						</div>
					</section>
				</div>

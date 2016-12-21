<header id="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <a class="navbar-brand" id="logo" href="/new">
                        GAME SHOP
                    </a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right hidden-sm">

                            @if(Auth::check())
                                  <li><a href="{{ url('home') }}">ダッシュボード</a></li>
                            @endif
                            @if(Auth::guest())
                                  <li><a href="{{ url('/login') }}">ログイン</a></li>
                            @endif
                            @if(Auth::guest())
                                  <li><a href="{{ url('auth/register') }}">サインアップ</a></li>
                            @endif
                            @if(Auth::check())
                                  <li><a href="{{ url('/logout') }}">ログアウト</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!-- #header -->

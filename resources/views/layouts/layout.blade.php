<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div>
            <div>

            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    @if (!Auth::user())
                        <li><a href="/login">登錄</a></li>
                        <li><a href="/register">註冊</a></li>
                    @else
                        <li><a href="">我的訂單 <span class="fa fa-briefcase"></span></a></li>
                        <li><a href="">購物車<span class="fa fa-shopping-cart"></span></a>
                        </li>
                        <li><a href="">退出 {{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>

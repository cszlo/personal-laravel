<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clay Szlosek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #07122F;
                /* color: #636b6f; */
                color: #71d2d9;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10;
            }

            .sidebar {
                width: 80px;
                position: fixed;
                bottom: 0px;
                left: 40px;
                color: rgb(168, 178, 209);
            }

            .main{

            }

            .top-links{
              z-index: 5;
              text-align: right;
              margin-right: 25px;
              margin-left: 25px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                /* color: #636b6f; */
                color: #71d2d9;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
		@yield('content')

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Layout
                </div>

                <div class="links">
                    <a href="https://www.linkedin.com/in/clay-szlosek">LinkedIn</a>
                    <a href="https://www.github.com/cszlo">Github</a>
                    <a href="https://github.com/laravel/laravel">Resume</a>
		    <a href="/blog">Blog</a>
                </div>
            </div>
        </div> -->
    </body>
</html>

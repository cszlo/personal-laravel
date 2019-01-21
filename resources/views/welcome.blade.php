<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clay Szlosek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="/Styles/styles.css" />

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
                    Welcome
                </div>

                <div class="links">
                    <a href="https://www.linkedin.com/in/clay-szlosek">LinkedIn</a>
                    <a href="https://www.github.com/cszlo">Github</a>
                    <a href="https://github.com/laravel/laravel">Resume</a>
		    <a href="/blog">Blog</a>
		<a href="/test">Test</a>
                </div>
            </div>
        </div> -->
    </body>
</html>

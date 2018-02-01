<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jobboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600,800" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="container" style="height:17%;position: fixed;width:100%;background-color:white;z-index:2">
        <div class="top-left links">
            <a id="brand" href="{{ url('/home') }}">Jobboard</a>
        </div>
        {{--@if (Route::has('login'))--}}
            <div class="top-right links">
                @auth
                    <a href="{{ route('admin') }}">admin</a>
                @endauth
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    @else
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                        @endguest
            </div>
        {{--@endif--}}
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
</body>
</html>

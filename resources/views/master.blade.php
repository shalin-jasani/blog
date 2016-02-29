<html>
<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/laravel.js')}}"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>


    <header class="header-basic">
        <div class="header-limiter">
            <h1><a href="">Blog<span>System</span></a></h1>
            <nav id="nav">
                <a href="{{ url('/') }}" >Home</a>
                    @if(Session::has('username'))
                        @if(Session::get('username') == 'admin@gmail.com')
                            <a href="{{ url('admin') }}" >Admin  </a>
                            <a href="{{ url('insertBlog') }}" >Add Blog </a>
                        @endif
                            <a href="{{ url('logout') }}">Logout</a>
                        @else
                            <a href="{{ url('login') }}">Login</a>
                    @endif
            </nav>
        </div>
    </header>
</head>

<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
    @yield('content')
    </div>
</body>
</html>
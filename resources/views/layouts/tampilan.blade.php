<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SI OMAN</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/media-queries.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

    </head>

    <body>
        
        <!-- Top menu -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"">Office Management PT. Nufaza</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <a href="{{ url('/portofolio') }}"><i class="fa fa-user"></i><br>Profil Karyawan</a>
                            </li>
                            <li>
                                <a href="{{ url('/proyek') }}"><i class="fa fa-tasks"></i><br>Proyek Yang Dikerjakan</a>
                            </li>
                            <li><a href="{{ url('/login') }}"><i class="fa fa-users"></i><br>Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i><br>Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"></i><br>
                                    {{ Auth::user()->nama }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('konten')

        <!-- Javascript -->
        <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/retina-1.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </body>

</html>
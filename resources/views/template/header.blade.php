
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <img src="c.jpeg" class="navbar-brand" style="max-width:100px;margin-top:1px">
                <a class="navbar-brand" href="home">Caklihong</a>
            </div>
            <!-- /.navbar-header -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Caklihong') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
                    <!-- Collapsed Hamburger -->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
         <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                    </ul>


            <div class="navbar-default sidebar" role="navigation">
                    <ul class="nav" id="side-menu">
        


                        <li>
                            <a href="home"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                       
                        <li>
                            <a href="gallery"><i class="fa fa-user fa-fw"></i> Gallery</a>
                        </li>
                       <li>
                            <a href="tabel"><i class="fa fa-table fa-fw"></i> Data Tabel</a>
                        </li>
                         <li>
                            <a href="paragrap"><i class="fa fa-edit fa-fw"></i> Paragraps</a>
                        </li>
                        <li>
                            <a href="Biografi"><i class="fa fa-edit fa-fw"></i> Biografi</a>
                        </li>
                        <li>
                            <a href="jadwal"><i class="fa fa-edit fa-fw"></i> Jadwal</a>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class="row">    
                <div class="col-lg-8">
                   
        
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Maqalat | @yield('title') </title>
    <!--font--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css"
        integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3fa8ad4ccc.js"></script>
    <!--css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!--End css-->

</head>

<body>

    <header class="upper-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <!--==================== right logo=============================-->
                    <div class="img-header-left">
                        <ul class="nav justify-content-Start">

                            <li class="nav-item">
                                <a class=" nav-link" href="{{ asset('') }}">الرئيسية</a>
                            </li>
                            @foreach ($mypages as $item)
                                <li class="nav-item">
                                    <a class=" nav-link" href="{{ asset('pages/' . $item->id) }}">{{ $item->title }}</a>
                                </li>
                            @endforeach
                            <li class="nav-item">
                                <a class=" nav-link" href="{{ asset('call') }}">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                    <!--=================================================-->

                </div>
                <!--==================left-header-componit===============================-->

                <div class="col-lg-4 header-left">
                    <!--==================  Start social===============================-->
                    <div class="social ">
                        <div class="row">
                            @foreach ($settings as $setting)
                                <a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            @endforeach
                        </div>
                    </div>

                    <!--==================  End social===============================-->
                    <!--==================  Start search ===============================-->
                   <div class="mr-2">
                        <!-- Authentication Links -->
                        @guest
                            <a style="color: white" class="mr-2 p-2" href="{{ route('login') }}"><i class="fas fa-user"></i> تسجيل دخول</a>
                            <a style="color: white" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> تسجيل</a>
                        @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                   </div>
                    <!--==================  End search ===============================-->

                </div>
            </div>
        </div>
    </header>

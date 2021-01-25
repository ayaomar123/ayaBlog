<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Maqalat | </title>
    <!--font--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css"
        integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3fa8ad4ccc.js"></script>
    <!--css-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/header.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/responsive.css">
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
                                <a class=" nav-link" href="http://127.0.0.1:8000/">الرئيسية</a>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-4 header-left">
                    <div class="mr-2">
                        <a style="color: white" class="mr-2 p-2" href="http://127.0.0.1:8000/login"><i
                                class="fas fa-user"></i> تسجيل دخول</a>
                        <a style="color: white" href="http://127.0.0.1:8000/register"><i class="fas fa-user-plus"></i>
                            تسجيل</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="header-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="logoSection text-right">
                            <img src="http://127.0.0.1:8000/img/maqal.png" alt="maqal">
                        </div>
                    </div>
                    <div class="col-lg-6 imgAd text-left">

                    </div>
                </div>
            </div>

        </section>

        <div class="container">
            <div class="py-4">
                @yield('content')
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p>المقالات والتعليقات لا تعبر عن رأي الموقع بل تعبر عن رأي الكاتب نفسه وللإبلاغ عن مقالة أو
                            تعليق مخالف ارسل بلاغ</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <a href="http://">تواصل معنا</a>
                            <a href="http://">الشروط والاحكام</a>
                            <a href="http://">سياسة الخصوصية</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1>©جميع الحقوق محفوظة لدى مقالات 2021</h1>
                    </div>
                    <div class="col-lg-6">
                        <ul class="soical-footer">

                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </main>


    <!----java script----->
    <script src="http://127.0.0.1:8000/assets/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/vue.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/script-vue.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/script.js"></script>
    <!---- End java script----->

</body>

</html>

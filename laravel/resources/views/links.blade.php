
<html lang="fa">
<head>
    <title>{{'جمعیت حلال احمر'}}-@yield('title')</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- sset icon site--}}
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
</head>
<header class="col-12">
    <img class="index_img" src="{{asset("assets/images/index.png")}}">
    <img class="flag_img" src="{{asset("assets/images/Flag.png")}}">
</header>
<body>
<div class="login_right col-8">
@yield('body')
</div>
<div class="login_left col-4">
    <div class="col-8 login_news_box">
        <div class="col-12 login_news_title">

            <b>اخبار شعبه</b>
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            ذوره هایی جدید در حال بخ روز رسانی میباشد و به زودی اعلام خواهد شد تا همه ی علاقه مندان از ان اسفاده کنند
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
        <div class="col-12 login_news_item">
            <img src="{{url('assets/images/news.png')}}" class="icon_news">
            حوادث شب گذشته
        </div>
    </div>
</div>

</body>
<footer class="col-12">
    <div class="col-3 footer_item">
        <img src="{{url('assets/images/call.png')}}">
        09136256555655
    </div>
    <div class="col-3 footer_item">
        <img src="{{url('assets/images/instagram.png')}}">
        helal ahmar
    </div>
    <div class="col-3 footer_item">
        <img src="{{url('assets/images/telegram.png')}}">
        helalahmar
    </div>
    <div class="col-3 footer_item">
        <img src="{{url('assets/images/location.png')}}">
        najafabad
    </div>

</footer>
</html>
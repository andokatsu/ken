<!doctype html>
<html lang="ja">
<head>
<script data-ad-client="ca-pub-1188653658586187" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174232376-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174232376-1');
</script>

 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 {{-- jQuery読み込み --}}
 <script
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
 integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
 crossorigin="anonymous"></script>

 {{-- bootstrap4読み込み --}}
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
 integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.cs
s" rel="stylesheet" integrity="sha384-
Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous">
 <script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-
wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"></script>
 <script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.m
in.js" integrity="sha384-
6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"



crossorigin="anonymous"></script>
 <script>
 {{--@yield('script')--}}
 </script>
 <title>マリオカートツアー - @yield('title')</title>

 <style>
 .container {
     background-color: #f99;
 }
 </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-3 back-color2">
        <a href="{{ url('/top') }}"><img src="img/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="{{ url('/chara') }}">適正キャラ判断</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="kart.php">適正マシン判断</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="glider.php">適正グライダー判断</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="{{ url('/custom') }}">カスタム判断</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="{{ url('/course_list') }}">コース一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="{{ url('/kaihouCourse') }}">レベルアップ解放コース一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="{{ url('/douga') }}">おすすめ動画</a>
                </li>
        </div>
    </nav>
<!-- container div-->
<div> 




    
    
@section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
        
            @yield('content')
            
        </div>
 
</body>

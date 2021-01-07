@extends('layouts.app')

@section('title', '適正判断')

@section('sidebar')
<!-- <h1>
    <div style="text-align:center">マリオカートツアー適正判断</div>
</h1> -->
@endsection

@section('content')
<div class="py-4">
  <div class="container">
    <!-- カルーセル外枠 -->
    <div id="main_visual" class="carousel slide" data-ride="carousel">
      <!-- インジケーター -->
      <ol class="carousel-indicators">
        <li data-target="#main_visual" data-slide-to="0" class="active"></li>
        <li data-target="#main_visual" data-slide-to="1"></li>
        <li data-target="#main_visual" data-slide-to="2"></li>
      </ol>
      <!-- / インジケーター -->
      <!-- カルーセル内枠 -->
      <div class="carousel-inner">
        <!-- スライド01 -->
        <div class="carousel-item active">
          <img class="img-fluid" src="img/gazou.png" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h2><p class="text-white bg-dark">マリオカートツアー適正判断</p></h2>
            <p>スマートフォン用アプリ　マリオカートツアーの様々な判断を目的としたサイトで、所持しているキャラ、マシン、グライダーを選択してどのコースの適正を
            所持していないかが、プログラミングを用いて簡単に判断できるサイトです</p>
          </div>
        </div>
        <!-- / スライド01 -->
        <!-- スライド02 -->
        <div class="carousel-item">
          <img class="img-fluid" src="img/logo2.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
          <h2><p class="text-white bg-dark">マリオカートツアー適正判断</p></h2>
            <p>カスタム判断ではどのキャラやマシン、グライダーを使えば一番高得点を狙えるかがわかります。</p>
          </div>
        </div>
        <!-- / スライド02 -->
        <!-- スライド03 -->
        <div class="carousel-item">
          <img class="img-fluid" src="img/ban.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
          <h2><p class="text-white bg-dark">マリオカートツアー適正判断</p></h2>
            <p>コース一覧からは最適性一覧も見られるようになっています。</p>
          </div>
        </div>
        <!-- / スライド03 -->
      </div>
      <!-- / カルーセル内枠 -->
      <!-- コントローラー -->
      <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">前に戻る</span>
      </a>
      <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">次に進む</span>
      </a>
      <!-- / コントローラー -->
    </div>
    <!-- / カルーセル外枠 -->
  </div>
<br>

新キャラ、マシン、グライダーが実装された場合やショップに持っていないカスタムが出現した際にこのシステムを利用し、<br/>
その新アイテムがご自身にとって必要かの判断のお役に立てば幸いでございます。<br/><br/><br/>

<a class="nav-link mr-2 ml-2" href="{{ url('/menseki') }}">免責事項</a>
@stop
@extends('layouts.app')

@section('title', '適正判断')

@section('sidebar')

@endsection

@section('content')

<h2>ポイントブースト計算</h2>

キャラまたはマシン、グライダーの数値とそのレベルを半角数字で入力してください<br>
※ポイントブーストは最適正でないと付加されません<br><br>

<form method = "post" action = "custom">
@csrf
    ベースポイント
    <input type = "text" name = "numA" size = "5" placeholder="800">
    ×
    レベル
    <input type = "text" name = "numB" size = "5" placeholder="3"><br><br>

    <input type = "submit" value = "計算">
    <input type = "reset" value = "クリア">
</form>
<br>

@php

//値が入力されていれば受け取る
//ベースポイント × (レベル - 1) × 150 / 30000
if(isset($_POST['numA']) && isset($_POST['numB']) 
  && preg_match('/^[0-9]+$/',$_POST['numA']) && preg_match('/^[0-9]+$/',$_POST['numB'])){
  $a = $_POST['numA'];
  $b = $_POST['numB'];
  $answer = $a * ($b - 1) * 150 / 30000;
  print "1アクション毎の加算ポイントブースト値は".$answer;
}else{
  echo "数値を半角数字で入力してください";
}


@endphp

<br/><br/><br/>
<a href="{{ url('/top') }}">トップページへ戻る</a>
@stop
@extends('layouts.app')

@section('title', '適正判断')

@section('sidebar')

@endsection

@section('content')
<p>あなたが適正(アイテム3つ所持可能)キャラがいないコースは</p>



@foreach($special as $select)
{{$select}}
<br>
@endforeach
<br>

@foreach($postChara_id as $id)
{{$id}}
<br>
@endforeach




<br>
<a href="{{ url('/top') }}">トップページへ戻る</a>
@stop
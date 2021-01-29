@extends('layouts.app')

@section('title', '適正判断')

@section('sidebar')

@endsection

@section('content')



<h2>あなたが所持しているキャラクターを選んでください</h2>
<br/><br/>
<form action="{{ url('/chara_result2')}}" method="post">
@csrf

<div class="d-flex flex-wrap">
  <div class="row">
    @foreach($chara as $use)
    <div class="col-3">
      <!-- 1 div-->
      <div>
        <!-- 2 div-->
        <div>
          <div style="text-align:center">
            <label for="{{$use->id}}">
              <input type="checkbox" name="chara_id[]" value="{{$use->id}}" id="{{$use->id}}">
              {{$use->chara_name}}
            </label>
          <!-- center div-->
          </div>
        <!-- 2 div-->
        </div>

        <!-- 3 div-->
        <div>
          <label for="{{$use->id}}" style="display: block;">
            <img src="img/{{$use->chara_name}}.png" width="100%" alt="" id="{{$use->id}}">
          </label>
        <!-- 3 div-->
        </div>

      <!-- 1 div-->
      </div>
    <!-- col div-->
    </div>
    @endforeach

  <!-- row div-->
  </div>
<!-- wrap div-->
</div>

<br/>

<div style="text-align:center">
  <h3>
    <input type="submit" value="結果判定画面へ" style="border:none;background-color:transparent;color:blue;text-decoration:underline;">
  </h3>
</div>

</form>

<br/><br/><br/>
<a href="{{ url('/top') }}">トップページへ戻る</a>
@stop
@extends('front.layouts.master')

@section('content')
<br><br>
<div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/moea1.png')}}" alt="moea1"  class="img-fluid">
          <div class="carousel-caption">
          </div>   
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/moea2.png')}}" alt="moea2" class="img-fluid">
          <div class="carousel-caption">
          </div>   
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/moea1.png')}}" alt="moea1"  class="img-fluid">
          <div class="carousel-caption">
          </div>   
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</div>
@endsection
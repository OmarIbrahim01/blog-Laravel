@extends('layout.main')
@section('header')
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
<div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Omar's Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>
@stop

@section('content')
@foreach($items as $item)
	<h2>{{$item->name}}</h2>
@endforeach

@stop
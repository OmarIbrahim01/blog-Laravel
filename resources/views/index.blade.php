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
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">
    @foreach($posts as $post)
      <div class="post-preview">
        <a href="/post/{{$post->slug}}">
          <h2 class="post-title">
            {{$post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->excerpt}}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{ $post->author->name }}</a>
          on {{$post->created_at->format('M d, Y')}}</p>
      </div>
      <hr>
    @endforeach
   
    {{ $posts->links() }}

  </div>
</div>
@stop
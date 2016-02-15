@extends('layouts.blogs')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{asset("blog/img/home-bg.jpg")}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>{{$blog->title}}</h1>
                    <hr class="small">
                    <span class="subheading">{{$blog->short}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{action('BlogPostController@show',['blogs'=>$blog->slug,'posts'=>$post->id])}}">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                </a>
                    <!-- <h3 class="post-subtitle">
                        {{$post->description}}
                    </h3> -->
                <p class="post-meta">Posted by <a href="{{action('BlogController@about',['id'=>$post->blog->slug])}}">{{$post->user->name}}</a> on {{$post->published_at}}</p>
            </div>
            <hr>
        @endforeach
            <!-- Pager -->
            <div class="pager">
            {{$posts->render()}}
            </div>
            <!-- <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul> -->
        </div>
    </div>
</div>
@endsection

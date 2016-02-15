@extends('layouts.blogs')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{asset("blog/img/post-bg.jpg")}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
                    <span class="meta">Posted by <a href="{{action('BlogController@about',['user'=>$post->blog->slug])}}">{{$blog->user->name}}</a> on {{$post->published_at}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {{$post->description}}
            </div>
        </div>
    </div>
</article>
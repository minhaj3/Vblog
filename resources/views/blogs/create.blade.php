@extends('layouts.app')

@section('content')

<div id="blue">
	<div class="container">
		<div class="row centered">
			<div class="col-lg-8 col-lg-offset-2">
			<h4>LEARN MORE ABOUT US</h4>
			<p>WE ARE COOL PEOPLE</p>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!--  bluewrap -->

<div class="container">
    <br><h1>Create a new Blog</h1>
  	<hr>
	<div class="row">
		<ul>
		    @foreach($errors->all() as $error)
		      	<li>
		      		<div class="alert alert-warning alert-dismissable">{{$error}}<a class="panel-close close" data-dismiss="alert">×</a></div>
		      	</li>
		    @endforeach
		</ul>
		<h2>Personal info</h2><br>

		{!! Form::open(['route'=>'blogs.store','role'=>'form','class'=>'form-horizontal','files'=>true,'novalidate'=>'novalidate']) !!}

		<div class="form-group">
        	{!! Form::label('title','Blog Title') !!}
        	{!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Enter your blog title here']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('excerpt','Blog Excerpt') !!}
			{!! Form::text('excerpt',null,['class'=>'form-control','required','placeholder'=>'Enter your short description here']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description','Blog Description') !!}
			{!! Form::textarea('description',null,['class'=>'form-control','required','placeholder'=>'Enter your complete blog description here']) !!}
        </div>

        <div class="form-group">
        	{!! Form::label('image','Upload a cool pic for your blog') !!}
        	{!! Form::file('image',null) !!}
        </div>

		<div class="form-group">
			{!! Form::submit('Create Blog !',['class'=>'btn btn-primary']) !!}
		</div>

        {!! Form::close() !!}

    </div>
</div>

@endsection
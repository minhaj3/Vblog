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

<div class="container w">
<?php $flag=0; ?>
@foreach($blogs as $blog)
		<?php $flag+=1 ?>
		@if($flag%4 == 1)
		<div class="row centered">
		@endif
			<div class="col-lg-3">
				<!-- <img class="img-circle" src="assets/img/pic.jpg" width="110" height="110" alt=""> -->
				<h4>{{$blog->title}}</h4>
				<p>{{$blog->short}}</p>
				<p><a href="{{URL::route('blogs.show',[$blog->slug])}}">Read More</a></p>
			</div><!-- col-lg-3 -->
		@if($flag%4 == 0)
		</div><!-- row -->
		@endif
@endforeach
@if($blogs->count()%4 != 0)
</div> <!-- row -->
@endif
{!! $blogs->render() !!}
	</div><!-- container -->
@endsection
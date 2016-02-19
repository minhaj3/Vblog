@extends('layouts.app')

@section('content')

<br>
<div class="container">
  <div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">User profile<hr></div>
          </div>
          <div class="row">
			<div class="col-md-4 text-center">
              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
              display:block; margin:auto;" src="http://robohash.org/sitsequiquia.png?size=120x120">
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin">{{$user->name}}</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">Email:</span> {{$user->email}}<br>
                  <!-- <span class="text-muted">Birth date:</span> 01.01.2001<br> -->
                  <!-- <span class="text-muted">Gender:</span> male<br><br> -->
                  <small class="text-muted">Created: {{$user->created_at}}</small>
                  <small class="text-muted">Last updated at: {{$user->updated_at}}</small>
                </div>
                <div class="col-md-6">
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-comment text-muted"></i> 500
                  </div>
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-thumbs-up text-muted"></i> {{$user->blog->likes}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
@endsection
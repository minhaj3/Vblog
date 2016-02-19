@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:35px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard: You are logged in!</div>

                <div class="panel-body">
                    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    <!-- <div class="container"> -->
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('profile/img/user.png')}}" class="img-rounded img-responsive" />
                    <br />
                    <br />
                    <label>Registered Username</label>
                    <input type="text" class="form-control" placeholder="Demouser">
                    <label>Registered Name</label>
                    <input type="text" class="form-control" placeholder="Jhon Deo">
                    <label>Registered Email</label>
                    <input type="text" class="form-control" placeholder="jnondeao@gmail.com">
                    <br>
                    <a href="#" class="btn btn-success">Update Details</a>
                    <br /><br/>
                </div>
                <div class="col-md-8">
                    
                    <div >
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                    <div class="form-group col-md-8">
                        <h3>Change YOur Password</h3>
                        <br />
                        <label>Enter Old Password</label>
                        <input type="password" class="form-control">
                        <label>Enter New Password</label>
                        <input type="password" class="form-control">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" />
                        <br>
                        <a href="#" class="btn btn-warning">Change Password</a>
                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    <!-- </div> -->
    <!-- CONATINER END -->
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
<br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
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
                  <h1 class="only-bottom-margin">User Name</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">Email:</span> email@test.com<br>
                  <span class="text-muted">Birth date:</span> 01.01.2001<br>
                  <span class="text-muted">Gender:</span> male<br><br>
                  <small class="text-muted">Created: 01.01.2015</small>
                </div>
                <div class="col-md-6">
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-comment text-muted"></i> 500
                  </div>
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-thumbs-up text-muted"></i> 1500
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
  </div>
</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
<div class="well">
                        <h2>User Bio : </h2>
                        <h4>Bootstrap user profile template </h4>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                             3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                        </p>
                    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

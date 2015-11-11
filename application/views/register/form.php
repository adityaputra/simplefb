<!DOCTYPE html>
<!-- Template from https://www.bootstrapzero.com/bootstrap-template/facebook -->
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Register - SimpleFB</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="public/css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">


            <!-- main right col -->
            <div class="column col-sm-12 col-xs-11" id="main">

                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand logo">b</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">

                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Register to SimpleFB</a>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->

                <div class="padding">
                    <div class="full col-sm-9">

                        <!-- content -->
                      	<div class="row">

                         <!-- main col left -->
                         <div class="col-sm-5">
                          </div>

                          <!-- main col right -->
                          <div class="col-sm-7">

                                <div class="well">
                                   <form class="form" action="<?php echo base_url();?>index.php/register/do_register/"  method="post" enctype="multipart/form-data">
                                    <h4>Register</h4>
                                    <div class="input-group">
                                      <div class="row">
                                        <div class="col-sm-4">Username</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Username" name="username"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Password</div>
                                        <div class="col-sm-8"><input type="password" class="form-control input-lg" placeholder="Password" name="password"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Name</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Name" name="name"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Email</div>
                                        <div class="col-sm-8"><input type="email" class="form-control input-lg" placeholder="Email" name="email"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Birthday</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Birthday" name="birthday"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Address</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Address" name="address"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">City</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="City" name="city"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Province</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Province" name="province"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Country</div>
                                        <div class="col-sm-8"><input type="text" class="form-control input-lg" placeholder="Country" name="country"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-4">Picture</div>
                                        <div class="col-sm-8"><input type="file" class="form-control input-lg" placeholder="Picture" name="picture"></div>
                                      </div>
                                    </div>
                                    <div>
                                      <span class="input-group-btn"><input class="btn btn-lg btn-primary" type="submit" value="Register">OK</button></span>
                                    </div>
                                    <div class="text-left">
                                      <a href="<?php echo base_url();?>">Already have an account? Register here.</a>
                                    </div>
                                  </form>
                                </div>

                              </div>

                          </div>
                       </div><!--/row-->

                        <div class="row">
                          <div class="col-sm-6">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                        </div>

                        <div class="row" id="footer">
                          <div class="col-sm-6">

                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright 2013</a>
                            </p>
                          </div>
                        </div>

                      <hr>

                      <h4 class="text-center">
                      <a href="http://bootply.com/96266" target="ext">Download this Template @Bootply</a>
                      </h4>

                      <hr>


                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			Update Status
      </div>
      <div class="modal-body">
          <form class="form center-block">
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
		  </div>
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/scripts.js"></script>
	</body>
</html>

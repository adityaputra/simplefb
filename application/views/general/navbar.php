<body>
<div class="wrapper">
  <div class="box">
      <div class="row row-offcanvas row-offcanvas-left">


          <!-- sidebar -->
          <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

              <ul class="nav">
              <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            </ul>

              <ul class="nav hidden-xs" id="lg-menu">
                  <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Featured</a></li>
                  <li><a href="#stories"><i class="glyphicon glyphicon-list"></i> Stories</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Saved</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></li>
              </ul>
              <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                  <li>
                    <a href="http://www.bootply.com"><h3>Bootstrap</h3> <i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>
                  </li>
              </ul>

              <!-- tiny only nav-->
            <ul class="nav visible-xs" id="xs-menu">
                  <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                  <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                  <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                  <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
              </ul>

          </div>
          <!-- /sidebar -->

          <!-- main right col -->
          <div class="column col-sm-10 col-xs-11" id="main">

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
                  <form class="navbar-form navbar-left">
                      <div class="input-group input-group-sm" style="max-width:360px;">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                  </form>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>
                    <li>
                      <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                    </li>
                    <li>
                      <a href="#"><span class="badge">badge</span></a>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('name');?> <i class="glyphicon glyphicon-user"></i> </a>
                      <ul class="dropdown-menu">
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                      </ul>
                    </li>
                    <li >
                      <a href="<?php echo base_url();?>index.php/logout/" >Logout <i class="glyphicon glyphicon-fire"></i> </a>
                    </li>
                  </ul>
                  </nav>
              </div>
              <!-- /top nav -->

<?php include("inicio.php"); ?>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Anderson Hardy</h2><span class="text-uppercase">Web Developer</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>
            <li> <a href="forms.php"><i class="icon-form"></i><span>Forms</span></a></li>
            <li> <a href="charts.php"><i class="icon-presentation"></i><span>Charts</span></a></li>
            <li> <a href="tables.php"> <i class="icon-grid"> </i><span>Tables                        </span></a></li>
            <li> <a href="login.php"> <i class="icon-interface-windows"></i><span>Login page                        </span></a></li>
            <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="#">Page 1</a></li>
                <li> <a href="#">Page 2</a></li>
                <li> <a href="#">Page 3</a></li>
                <li> <a href="#">Page 4</a></li>
              </ul>
            </li>
            <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
            <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="login.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="breadcrumb-holder">   
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Charts</li>
          </ul>
        </div>
      </div>
      <section class="charts">
        <div class="container-fluid">
          <header> 
            <h1 class="h3">Charts</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Line Chart Example</h2>
                </div>
                <div class="card-block">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Bar Chart Example</h2>
                </div>
                <div class="card-block">
                  <canvas id="barChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card pie-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Pie Chart Example</h2>
                </div>
                <div class="card-block">
                  <canvas id="pieChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card polar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Ploar Chart Example</h2>
                </div>
                <div class="card-block">
                  <canvas id="polarChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card radar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Radar Chart Example</h2>
                </div>
                <div class="card-block">
                  <canvas id="radarChartExample"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-custom.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  <?php include("fim.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Facens Exchange</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>EX</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Facens</b> Exchange</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-exchange"></i>
              <span class="label label-danger">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 Exchange(s)</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> Jogo de Cadeiras
                      </a>  
                  </li>
                  <!-- end task item -->
                  
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all Exchanges</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Marco Aurélio</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                    Marco Aurélio - PHP Developer
                  <small>Member since Jan. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Exchanges</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Marco Aurélio</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="active ">
            <a href="#">
              <i class="fa fa-home"></i> <span>Home</span>
            </a>            
          </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-desktop"></i> Tecnologies</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-car"></i> Car</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-legal"></i> Tools</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-gamepad"></i> Toys</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-book"></i> Books</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-futbol-o"></i> Sports</a></li>
          </ul>
        </li>
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facens
        <small>Exchange</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->session->userdata('item'); ?>
      <div>
          <div class="row">
             
          <div class="col-md-4">
              <div class="box box-solid box-primary">
                <div class="box-header">
                  <h3 class="box-title">Jogo de Cadeiras</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                  <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">

                
                </div><!-- /.box-body -->
                <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>

                <!-- <button type="button" class="btn btn-block btn-primary btn-flat" >More info</button> -->
                <a class="btn btn-block btn-primary btn-flat" href="<?= site_url('Trade/tradeDetails') ?>">More info</a>
              </div><!-- /.box -->
              
            </div>

            <div class="col-md-4">
                <div class="box box-solid box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Jogo de Cadeiras</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    
                    <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">
  
                  </div><!-- /.box-body -->
                  <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>
                  <button type="button" class="btn btn-block btn-primary btn-flat">More info</button>
                </div><!-- /.box -->
                
              </div>

              <div class="col-md-4">
                  <div class="box box-solid box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Jogo de Cadeiras</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      
                      <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">
                         
                    </div><!-- /.box-body -->
                    <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>
                    <button type="button" class="btn btn-block btn-primary btn-flat">More info</button>
                  </div><!-- /.box -->
                  
                </div>

                <div class="col-md-4">
                    <div class="box box-solid box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Jogo de Cadeiras</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        
                        <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">
                      </div><!-- /.box-body -->
                      <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>
                      <button type="button" class="btn btn-block btn-primary btn-flat">More info</button>
                    </div><!-- /.box -->
                    
                  </div>

                  <div class="col-md-4">
                      <div class="box box-solid box-primary">
                        <div class="box-header">
                          <h3 class="box-title">Jogo de Cadeiras</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">                          
                          <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">        
                        </div><!-- /.box-body -->
                        <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>
                        <button type="button" class="btn btn-block btn-primary btn-flat">More info</button>
                      </div><!-- /.box -->
                      
                    </div>

                    <div class="col-md-4">
                        <div class="box box-solid box-primary">
                          <div class="box-header">
                            <h3 class="box-title">Jogo de Cadeiras</h3>
                          </div><!-- /.box-header -->
                          <div class="box-body">
                            
                            <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">
                          </div><!-- /.box-body -->
                          <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li>Pouco tempo de uso;</li>
                        <li>Sem nenhuma marca de uso;</li>
                        <li>5 Cadeiras e 1 Mesa;</li>
                        <li>Madeira clara;</li>
                        <li>Top;</li>
                        <li>Aconchegantes.</li>                    
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>
                          <button type="button" class="btn btn-block btn-primary btn-flat">More info</button>
                        </div><!-- /.box -->
                        
                      </div>
           
        
      
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

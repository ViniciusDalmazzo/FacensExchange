<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Facens Exchange</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= site_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url('bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= site_url('bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url('dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= site_url('dist/css/skins/_all-skins.min.css') ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= site_url('bower_components/morris.js/morris.css') ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= site_url('bower_components/jvectormap/jquery-jvectormap.css') ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= site_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= site_url('bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= site_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- fontIconPicker -->
  <link rel="stylesheet" href="<?= site_url('bower_components/iconpicker/css/jquery.fonticonpicker.min.css') ?>" />
  <link rel="stylesheet" href="<?= site_url('bower_components/iconpicker/themes/grey-theme/jquery.fonticonpicker.grey.min.css') ?>"/>
  <!-- Font -->
  <link rel="stylesheet" href="<?= site_url('bower_components/iconpicker/demo/fontello-7275ca86/css/fontello.css') ?>"/>
  <link rel="stylesheet" href="<?= site_url('bower_components/iconpicker/demo/icomoon/icomoon.css') ?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('Home') ?>" class="logo">
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
            <?php if ($this->session->userdata('logged')) { ?>                
                   <img src="<?= site_url('dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">      
               <?php 
            } else { ?>                  
                      <img src="<?= site_url('dist/img/user-default.jpg') ?>" class="user-image" alt="User Image">      
              <?php 
            } ?>
            
              <span class="hidden-xs">
              <?php if ($this->session->userdata('logged')) { ?>                
                    <?php echo $this->session->userdata('userName'); ?>            
               <?php 
            } else { ?>                  
                    Guest       
              <?php 
            } ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <?php if ($this->session->userdata('logged')) { ?>                
                   <img src="<?= site_url('dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">      
               <?php 
            } else { ?>                  
                      <img src="<?= site_url('dist/img/user-default.jpg') ?>" class="img-circle" alt="User Image">      
              <?php 
            } ?>
                <?php if ($this->session->userdata('logged')) { ?>                
                    <p>
                    <?php echo $this->session->userdata('userName'); ?>        
                    <small>Member since Abr. 2018</small>
                    </p>              
                <?php 
              } else { ?>                  
                    <p>
                    Guest
                  <small>Login to exchange items.</small>
                </p>       
              <?php 
            } ?>
                
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?= site_url('User/listTrades') ?>">Exchanges</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">              
                  <div class="text-center">                  
                    <a href="#" class="btn btn-primary btn-flat">Profile</a>   
                      <?php if ($this->session->userdata('logged')) { ?>  
                        <a href="<?= site_url('Exchange/addTrade') ?>" class="btn btn-warning btn-flat">Add Trade</a>               
                    <a href="<?= site_url('Login/signOut') ?>" class="btn btn-danger btn-flat">Sign out</a>                
                      <?php 
                    } else { ?>                  
                    <a href="<?= site_url('Login') ?>" class="btn btn-success btn-flat">Sign in</a>                
                      <?php 
                    } ?>
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

      <?php if ($this->session->userdata('logged')) : ?>  
        <div class="user-panel">
        <div class="pull-left image">
           <img src="<?= site_url('dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image"> 
        </div>
        <div class="pull-left info">
          <p>   <?php echo $this->session->userdata('userName'); ?>        </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>            
      <?php endif; ?>
      <!-- search form -->
      <form action="<?= site_url('Exchange/searchOffers') ?>" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="active ">
            <a href="<?= site_url('Home') ?>">
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
            <?php if ($this->session->userdata('categories')) : ?>
              <?php foreach ($this->session->userdata('categories') as $row) : ?>
                <li class="active"><a href="<?= site_url('home/listTrades/' . $row->category_id) ?>"><?= $row->category_name ?></a></li>
            <!-- <li class="active"><a href="index.html"><i class="fa fa-car"></i> Car</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-legal"></i> Tools</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-gamepad"></i> Toys</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-book"></i> Books</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-futbol-o"></i> Sports</a></li> -->
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </li>
        <?php if ($this->session->userdata('admin')) : ?>
                   <li class=" treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?= site_url('Category/listCategories') ?>"><i class="fa fa-flag"></i>Categories</a></li>
            <li class="active"><a href="<?= site_url('User/listUsers') ?>"><i class="fa fa-users"></i>List Users</a></li>
          </ul>
        </li>    
      <?php endif; ?>
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
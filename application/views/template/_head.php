<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Rekomendasi Mesin Cuci</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables/3/dataTables.bootstrap.css">
    <script src="<?php echo base_url();?>assets/js/chart-master/Chart.js"></script>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>    
    <script src="<?php echo base_url()?>assets/js/jquery.sparkline.js"></script>

    <script src="<?php echo base_url()?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/datatables/3/dataTables.bootstrap.js"></script>
     <script src="<?php echo base_url()?>assets/js/zabuto_calendar.js"></script>  
    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url()?>assets/js/sparkline-chart.js"></script>    
 
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-validation.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Mesin Cuci</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="helps" data-toggle="modal" data-target="helps">Bantuan</a></li>
                    <?php if($this->session->userdata('_username')==''){?>
                    <li><a class="logout" href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Login</a></li>
                    <?php }else{?>
                    <li><a class="logout" href="<?php echo base_url()?>login/do_logout" >Logout</a></li>
                    <?php }?>
              </ul>
            </div>
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="navbar-nav">
                  <a href="<?php echo base_url()?>dashboard">
                    <i class="nav pull-right"></i>
                      <span>Dashboard</span>
                  </a>
                </li>
                <li class="sub-menu3">
                  <a href="<?php echo base_url()?>rekomendasi">
                    <i class="nav pull-right top"></i>
                      <span>Rekomendasi (Fuzzy Tahani)</span>
                  </a>
                </li>
              <li class="sub-open">
                      <a href="javascript:;" >
                          <i class="nav pull-right"></i>
                          Kategori<span class="caret"></span>
                      </a>
                      <ul class="collapse">
                          <?php 
                          $sss=$this->session->userdata('_username');
                          if(!empty($sss)){?>
                          <li><a href="<?php echo base_url()?>kategori">Kategori Baru</a></li>
                          <?php }?>
                          <?php $kategori=$this->db->get('mesin_kategori')->result();
                          foreach($kategori as $kat){?>
                          <li><a  href="<?php echo base_url()?>kategori/kategoris/<?php echo $kat->id_mesin_kategori;?>"><?php echo $kat->nama_mesin_kategori;?></a></li>
                          <?php }?>
                      </ul>
              </li>
              </ul>
            </div> -->
        </header>
      <!--header end-->
      <!-- helps -->
      <div class="modal helps" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        
      </div>
      <!-- login -->
      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <form action="<?php echo base_url()?>login/do_login" method="POST">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control"  placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Password">
              </div>
            </div>
            <div class="modal-footer">
              <center> <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-success">Login</button></center>
            </div>
          </div>
        </div>
        </form>
      </div>
      <!-- en login -->
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse "> -->
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href='#'><img src="<?php echo base_url()?>assets/img/logo_mesin.png" class="img-circle" width="155"></a></p>
                  <h5 class="centered"><?php echo $this->session->userdata('_username');?></h5>
                    
                  <li class="mt">
                      <a href="<?php echo base_url()?>dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Kategori Mesin Cuci</span>
                      </a>
                      <ul class="sub">
                          <?php 
                          $sss=$this->session->userdata('_username');
                          if(!empty($sss)){?>
                          <li><a href="<?php echo base_url()?>kategori">Kategori Baru</a></li>
                          <?php }?>
                          <?php $kategori=$this->db->get('mesin_kategori')->result();
                          foreach($kategori as $kat){?>
                          <li><a  href="<?php echo base_url()?>kategori/kategoris/<?php echo $kat->id_mesin_kategori;?>"><?php echo $kat->nama_mesin_kategori;?></a></li>
                          <?php }?>
                      </ul>
                  </li>
                  <?php if($this->session->userdata('_username')!=''){?>
                  <li class="sub-menu3">
                      <a href="<?php echo base_url()?>mesin_cuci">
                          <i class="glyphicon glyphicon-th-large"></i>
                          <span>Mesin Cuci</span>
                      </a>
                  </li>                                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-asterisk"></i>
                          <span>Pengaturan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url()?>pengaturan/kriteria">Data Kriteria Variable</a></li>
                          <li><a  href="<?php echo base_url()?>pengaturan/zadeh">Selector Operator Zadeh</a></li>
                          <li><a  href="<?php echo base_url()?>pengaturan/user">User</a></li>
                      </ul>
                  </li>
                  <?php }?>
                  <li class="sub-menu3">
                      <a href="<?php echo base_url()?>rekomendasi">
                          <i class="glyphicon glyphicon-list-alt"></i>
                          <span>Rekomendasi (Fuzzy Tahani)</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

       <section id="main-content">
          <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i> <?php echo $judul;?></h3>
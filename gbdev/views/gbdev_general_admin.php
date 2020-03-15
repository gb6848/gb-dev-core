<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- JQVMap-->
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/dist/js/demo.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!--sweetalert2-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin_lte/dist/js/helper.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline-->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/sparklines/sparkline.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/admin_lte/dist/js/adminlte.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a target="_blank" href="<?php echo base_url(); ?>" class="nav-link"><?=_l("View Website",$this)?></a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>-->
    </ul>

    <!-- SEARCH FORM -->
    <!--<form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!--<li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <!--<div class="media">
                        <img src="<?php echo base_url(); ?>assets/admin_lte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                <!--</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                   <!-- <div class="media">
                        <img src="<?php echo base_url(); ?>assets/admin_lte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                <!--</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <!--<div class="media">
                        <img src="<?php echo base_url(); ?>assets/admin_lte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                <!--</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        -->
        <!-- Notifications Dropdown Menu -->
       <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-power-off"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!--<span class="dropdown-item dropdown-header">about </span>-->
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url(); ?>admin-sign/logout" class="dropdown-item">
                    <i class="fas fa-key mr-2"></i> <?=_l('Log Out',$this);?>
                </a>
                <a href="<?=$base_url?>edituser/<?=$_SESSION["user_id"]?>" class="dropdown-item">
                    <i class="fas fa-user-circle mr-2"></i> <?=_l('Profile',$this);?>
                </a>
            </div>
        </li>
        <!--<li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>-->
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="<?php echo $base_url; ?>" class="brand-link" style="min-height: 56px;">
    <?php if(isset($settings["logo"]) && $settings["logo"]!=="" && isset($settings["show_logo"]) && $settings["show_logo"] ==1){ ?>
        <img src="<?php echo base_url(); ?><?=$settings["logo"]?>" alt="Logo" class="brand-image <?=(isset($settings["enabled_logo_circle"]) && $settings["enabled_logo_circle"] ==1)?"img-circle":""?>  elevation-3"
             style="opacity: .8">
    <?php }
    else { ?>
    <span class="brand-text font-weight-light"><?=isset($settings["company"])?$settings["company"]:""?></span>
    <?php } ?>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <?php if(isset($_SESSION["avatar"]) && $_SESSION["avatar"]!==""){ ?>
            <img src="<?php echo base_url(); ?><?=$_SESSION["avatar"]?>" class="img-circle elevation-2" alt="User Image">
        <?php } ?>

    </div>
    <div class="info">
        <a href="#" class="d-block"><?=$this->session->userdata('username')?></a>
    </div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->

<li class="nav-item">
    <a class="<?=($page == "home")?'nav-link active':'nav-link'?>" href="<?php echo base_url(); ?>admin/">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            <?=_l("Dashboard",$this)?>
        </p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            <?=_l("Content",$this)?>
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <?php if(isset($page_list) && count($page_list)!=0){ ?>
            <?php foreach($page_list as $data){ ?>
                <?php if(allowed_page_fields($data["page_type"],"extension",$all_page_type)){ ?>
                    <li class="nav-item">
                        <a  href="<?php echo $base_url; ?>extensions/page/<?=$data["page_id"]?>" <?=(isset($data_type) && isset($relation_id) && $data_type=="page" && $relation_id==$data["page_id"])?'class="nav-link active"':'class="nav-link"'?>>
                            <i class="far fa-circle nav-icon"></i> <p><?=$data["page_name"]?></p>
                        </a></li>
                <?php } ?>
                <?php if(allowed_page_fields($data["page_type"],"gallery",$all_page_type)){ ?>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>gallery/page/<?=$data["page_id"]?>" <?=(isset($data_type) && isset($relation_id) && $data_type=="page" && $relation_id==$data["page_id"])?'class="nav-link active"':'class="nav-link"'?>>
                            <i class="far fa-circle nav-icon"></i> <p><?=$data["page_name"]?></p>
                        </a>
                    </li>
                <?php } ?>
                <?php if(allowed_page_fields($data["page_type"],"ffs",$all_page_type)){ ?>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>ffs/page/<?=$data["page_id"]?>" <?=(isset($data_type) && isset($relation_id) && $data_type=="page" && $relation_id==$data["page_id"])?'class="nav-link active"':'class="nav-link"'?>>
                            <i class="far fa-circle nav-icon"></i> <p><?=$data["page_name"]?></p>
                        </a></li>
                <?php } ?>
                <?php if(allowed_page_fields($data["page_type"],"ppg",$all_page_type)){ ?>
                    <li class="nav-item" ><a href="<?php echo $base_url; ?>ppg_grapes/page/<?=$data["page_id"]?>" <?=(isset($data_type) && isset($relation_id) && $data_type=="page" && $relation_id==$data["page_id"])?'class="nav-link active"':'class="nav-link"'?>>
                            <i class="far fa-circle nav-icon"></i> <p><?=$data["page_name"]?></p>
                        </a></li>
                <?php } ?>
                <?php if(allowed_page_fields($data["page_type"],"pipvg",$all_page_type)){ ?>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>pipvg/page/<?=$data["page_id"]?>"  <?=(isset($data_type) && isset($relation_id) && $data_type=="page" && $relation_id==$data["page_id"])?'class="nav-link active"':'class="nav-link"'?>>
                            <i class="far fa-circle nav-icon"></i> <p><?=$data["page_name"]?></p>
                        </a></li>
                <?php } ?>
            <?php } ?>
        <?php } ?>


    </ul>
</li>

    <?php if( isset($settings["enabled_comments"]) && $settings["enabled_comments"] ==1){ ?>
<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/comment" class="<?=($page == "comment")?'nav-link':'nav-link'?>">
        <i class="nav-icon far fa-comment"></i>
        <p>
            <?=_l("Comments",$this)?>
        </p>
    </a>
</li>
    <?php } ?>
    <?php if(isset($_SESSION["group"]) && $_SESSION["group"] == 1){//Global admin ?>
<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/page" class="<?=($page == "page")?'nav-link active':'nav-link'?>">
        <i class="nav-icon far fa-file"></i>
        <p>
            <?=_l("Pages",$this)?>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/uploaded_images_manager" class="<?=($page == "uploaded_images")?'nav-link active':'nav-link'?>">
        <i class="nav-icon fa fa-upload"></i>
        <p>
            <?=_l("Uploaded pictures",$this)?>
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/user" class="<?=($page == "user")?'nav-link active':'nav-link'?>">
        <i class="nav-icon fa fa-users"></i>
        <p>
            <?=_l("Members",$this)?>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/language" class="<?=($page == "language")?'nav-link active':'nav-link'?>">
        <i class="nav-icon fa fa-globe"></i>
        <p>
            <?=_l("Languages",$this)?>
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/editmenu" class="<?=($page == "menu")?'nav-link active':'nav-link'?>">
        <i class="nav-icon fa fa-sitemap"></i>
        <p>
            <?=_l("Menu manager",$this)?>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo base_url(); ?>admin/settings" class="<?=($page == "setting")?'nav-link active':'nav-link'?>">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p>
            <?=_l("Settings",$this)?>
        </p>
    </a>
</li>
   <?php } ?>



    <!--------------------------------------------------------------------------------------------------------------------------------->

</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$title?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><?=_l("Home",$this)?></a></li>
                    <li class="breadcrumb-item active"><?=$title?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
    <?php echo $content; ?>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?><a href="http://gb-dev.si">gb-dev.si</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b><?=_l("Version",$this)?></b> 0.0.0.1
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
    $( document ).ready(function() {
        helper_CheckBox();

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000
            });

            <?php if($this->session->flashdata('message')){ ?>
            Toast.fire({
                type: 'info',
                title: '<?=$this->session->flashdata('message')?>'
            })
            <?php } ?>
            <?php if($this->session->flashdata('success')){ ?>
            Toast.fire({
                type: 'success',
                title: '<?=$this->session->flashdata('success')?>'
            })
            <?php } ?>
            <?php if($this->session->flashdata('error')){ ?>
            Toast.fire({
                type: 'error',
                title: '<?=$this->session->flashdata('error')?>'
            })
            <?php } ?>
    });

</script>
</body>
</html>

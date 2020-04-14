<?php  ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <title>Softex</title>
    
     
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url('assets/plugins/chartist-js/dist/chartist.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/chartist-js/dist/chartist-init.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') ?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url('assets/plugins/c3-master/c3.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/dist/sweetalert2.min.js') ?>"></script>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/sweetalert2.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <style type="text/css">
        @media (min-width: 768px){
            .mini-sidebar .left-sidebar {
                left: -260px;
                width: 60px;
            }
            .col-md-5{
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            #main-wrapper{
                background-color: white;
            }
        }
    </style>
    
</head>
<body id="page-top" class="fix-header fix-sidebar card-no-border">
  
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
          <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 style="color: #BAE190">SOFTEX</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a style="color: grey" href="javascript:void(0)">Page</a></li>
                            <li class="breadcrumb-item active">
                            <?php echo $title ?></li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">

                               <!--  <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div> -->
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            </div>
                            <!-- <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div> -->
                        </div>
                    </div>
                </div>

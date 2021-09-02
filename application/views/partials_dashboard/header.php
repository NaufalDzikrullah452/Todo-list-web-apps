<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/auth/images/icons/logo.png'); ?>">
    <!-- Pignose Calender -->
    <link href="<?= config_item('plugins') ?>pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Date picker and Clock picker plugins css -->
    <!-- Custom Stylesheet -->
    <link href="<?= config_item('plugins') ?>bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="<?= config_item('plugins') ?>clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <link href="<?= config_item('plugins') ?>bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?= config_item('plugins') ?>timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?= config_item('plugins') ?>bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link href="<?= config_item('css_dashboard') ?>style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?= site_url('index.php/dashboard/today') ?>">
                    <b class="logo-abbr"><img src="<?= config_item('images_dashboard') ?>logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?= config_item('images_dashboard') ?>logo-text.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?= config_item('images_dashboard') ?>logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?php echo base_url('assets/dashboard/images/users/user.png'); ?>" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="<?= site_url('index.php/dashboard/profile') ?>"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li><a href="<?= base_url('index.php/sign_in/signout') ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
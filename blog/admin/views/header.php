<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">

    <title>Admiiiin Blog</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-info fixed-top">
                <a class="navbar-brand" href="<?php echo RUTAADMIN; ?>/index.html"><img src="impulsa3.png" width=" 100px;" alt="" /></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="<?php echo RUTAADMIN; ?>/#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Admin </h5>
                                </div>
                                <a class="dropdown-item" href="<?php echo RUTAADMIN; ?>/#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="<?php echo RUTAADMIN; ?>/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="<?php echo RUTAADMIN; ?>/#">Dashboard</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <!-- active -->
                                <a class="nav-link " href="<?php echo RUTAADMIN; ?>/index.php"><i class="fa fa-fw fa-user-circle"></i>Home</a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo RUTAADMIN; ?>/posts.php"><i class="fab fa-fw fa-wpforms"></i>Pots</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo RUTAADMIN; ?>/coworkers.php"><i class="fas fa-user"></i>Impulsores</a>
                            </li>
                    </div>
                </nav>
            </div>
        </div>
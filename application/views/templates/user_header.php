<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/user/') ?>image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/admin/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/vendors/lightbox/simpleLightbox.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url('assets/images') ?>/logo.jpeg" width="190" height="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('user') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('user/userbooks') ?>">Bookings</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('user/payments') ?>">Payments</a></li>
                        <?php
                        if ($user) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
                        <?php
                        } else {
                        ?> <li class="nav-item"><a class="nav-link" href="<?= base_url('auth') ?>">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">The Muchda's</h2>
                <p class="breadcrumb text-light">
                    Professional Pekanbaru Hotel Provider
                </p>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apik Mandiri - <?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/magnific-popup.css">


    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/unicare-master/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/logoapik_withoutText.png" rel="shortcut icon">
    <style>
        .btn-donateFooter {
            background: #0376BC;
        }

        .footer a {
            color: black;
        }

        .text-page {
            padding-bottom: 16rem !important;
        }

        .hero-wrap.hero-wrap-2 {
            height: 400px;
        }


        .ftco-hireme {
            padding: 30px 0;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>/logo_apik.png" alt="logo_apik_mandiri" height="50" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <?php if ($title == "Beranda") { ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>profil" class="nav-link">Profil Lembaga</a></li>
                        <li class="nav-item cta"><a href="<?php echo base_url() ?>donate" class="nav-link">Donasi</a></li>
                    </ul>
                <?php } else if ($title == "Profil") { ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item active"><a href="<?php echo base_url() ?>profil" class="nav-link">Profil Lembaga</a></li>
                        <li class="nav-item cta"><a href="<?php echo base_url() ?>donate" class="nav-link">Donasi</a></li>
                    </ul>
                <?php } else if ($title == "Gallery") { ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="<?php echo base_url() ?>gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>profil" class="nav-link">Profil Lembaga</a></li>
                        <li class="nav-item cta"><a href="<?php echo base_url() ?>donate" class="nav-link">Donasi</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="<?php echo base_url() ?>profil" class="nav-link">Profil Lembaga</a></li>
                        <li class="nav-item cta"><a href="<?php echo base_url() ?>donate" class="nav-link">Donasi</a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>
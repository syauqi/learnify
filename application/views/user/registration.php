<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <title>Learnify - Belajar Dimana Saja & Kapan Saja!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/lottie.js"></script>
</head>

<body style="background-color: #edf2f7">
    <!-- Header Menu Area -->
    <header class="header_area" style="background-color: white !important;">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a href="https://www.facebook.com/syaaauqi"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/syaaauqi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://dribbble.com/syaufy"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.behance.net/syaufy"><i class="fa fa-behance"></i></a></li>
                        <li><a href="https://www.github.com/syauqi"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/syaufy"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="dn_btn" href="mailto:apps.learnify@gmail.com">apps.learnify@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" id="nav"><a class="nav-link" href="<?= base_url('welcome') ?>">Beranda</a></li>
                            <li class="nav-item" id="navtentang"><a class="nav-link" href="<?= base_url('welcome/tentang') ?>">Tentang</a>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="<?= base_url('welcome/pelajaran') ?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
                            </li>
                            <li class="nav-item" id="navkontak"><a class="nav-link" href="<?= base_url('welcome/kontak') ?>">Kontak</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Menu Area  -->

    <!-- Home Banner Area  -->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pendaftaran Learnify</h2>
                    <div class="page_link">
                        <a href="<?= base_url('welcome') ?>">Beranda</a>
                        <a href="<?= base_url('user/registration') ?>">Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="registration"></div>
    </section>
    <!-- End Home Banner Area  -->

    <!-- Registration Form Area -->
    <div class="container mt-5 mb-5" id="registration">
        <div class="row bg-registration p-3">
            <div class="col-md-12 text-center">
                <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                    Pendaftaran Learnify</p>
                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan dibawah ini </p>
                <hr>
            </div>
            <div class="col-md-6 mx-auto text-center">
                <div class="bodymovin" data-icon="<?= base_url('assets/') ?>json/registration-animation.json"></div>
            </div>
            <div class="col-md-6 mx-auto my-auto mt--5">
                <form action="<?= base_url('user/registration_act') ?>" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap" class="label-font-register">Nama lengkap</label>
                        <input type="text" autocomplete="off" class="form-control effect-9" name="nama" id="nama_lengkap" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype password</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">
                            <?= form_error('retype_password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1" onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                        <label class=" form-check-label" for="defaultCheck1">
                            Saya setuju dan ingin melanjutkan
                        </label>
                    </div>
                    <p class="terms">Dengan mendaftar anda menyetujui <i>privasi dan persyaratan ketentuan
                            hukum kami </i>
                        baca selengkapnya <a href="#"> disini</a></p>
                    <button type="submit" name="submit" id="btnsubmit" disabled class="btn btn-block btn-modal btn-submit">Daftar
                        Sekarang!</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Registration Form Area -->

    <!-- Start Checkbox Scripts -->
    <script>
        $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
            .length);
        $('input[type=checkbox]').click(function() {
            if ($('.tab1_chk:checkbox:checked').length > 0) {
                $('.btn-submit').prop('disabled', false);
            } else {
                $('.btn-submit').prop('disabled', true);
            }
        });
    </script>
    <!-- End Checkbox Scripts -->
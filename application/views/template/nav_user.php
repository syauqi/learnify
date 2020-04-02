<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url('assets/')?>img/favicon.png" type="image/png">
    <title>Learnify - Belajar Dimana Saja & Kapan Saja !</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a href="https://www.facebook.com/zaidan.syauqi.9"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/syauqykhairan"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://dribbble.com/syauqyzaidan"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.behance.net/syaauqizaaidan"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="dn_btn" href="tel:+4400123654896">(0265) 771204</a>
                    <a class="dn_btn" href="mailto:support@colorlib.com">surat@smkn1cms.net</a>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?=base_url('user')?>"><img
                            src="<?=base_url('assets/')?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?=base_url('user')?>">Beranda</a>
                            </li>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="<?=base_url('welcome/pelajaran')?>" class="nav-link dropdown-toggle"
                                    role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
                            </li>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Hai, <?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?>
                            <li class="nav-item "><a class="nav-link text-danger"
                                    href="<?=base_url('welcome/logout')?>">Log Out</a>
                            </li>
                    </div></a></li>

                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </header>


    <!--================Header Menu Area =================-->
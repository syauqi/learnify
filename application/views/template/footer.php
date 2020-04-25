<!--
@Project: Learnify
@Author/Programmer: Syauqi Zaidan Khairan Khalaf
@URL: syauqi.js.org
Author E-mail: Zaidanline67@Gmail.com

@About-Learnify :
Web Edukasi Open Source yang
dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi, dan soal ( Coming soon )
yang didesign semenarik dan sesimple mungkin. Learnify dibuat ditujukan agar para siswa
dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->


<!--================ Start footer Area  =================-->
<footer class="footer-area p_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Kami</h6>
                    <ul class="list">
                        <li><a href="<?=base_url('welcome/tentang')?>">Tentang Learnify</a></li>
                        <li><a href="<?=base_url('welcome/materi')?>">Materi Learnify</a></li>
                        <li><a href="<?=base_url('welcome/kontak')?>">Kontak Learnify</a></li>
                        <li><a href="http://smkn1ciamis.id/">Website Resmi Sekolah</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Masuk - Sign in</h6>
                    <ul class="list">
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Untuk Siswa</a></li>
                        <li><a href="<?=base_url('welcome/guru')?>">Untuk Guru</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Pelajaran - Materi</h6>
                    <ul class="list">
                        <li><a href="javaScript:void(0);">IPA</a></li>
                        <li><a href="javaScript:void(0);">Matematika</a></li>
                        <li><a href="javaScript:void(0);">Bahasa Indonesia</a></li>
                        <li><a href="javaScript:void(0);">Bahasa Inggris</a></li>
                        <li><a href="javaScript:void(0);">Pendidikan Agama Islam</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Developer</h6>
                    <ul class="list">
                        <li><a href="https://syauqizaidan.github.io">Syauqi Zaidan</a></li>
                        <li><a href="#">Taupik Hidayat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h4 class="footer_title">Tentang Learnify</h4>
                <p>
                    Learnify adalah website pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                    dan guru dapat mengupload video dirinya sendiri sedang mengajar. sehingga tanpa takut adanya Jam
                    kosong atau pun keadaan yang tidak terduga apapun karena Learnify dapat diakses dimana saja dan
                    kapan saja untuk belajar.
                </p>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Thank you colorlib for allow me to use this template. <br> Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <span class="text-danger"> &#10084;</span> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a> <br>
                Made with <span class="text-danger"> &#10084;</span> by syaauqi
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-md-4 footer-social">
                <a href="https://www.facebook.com/zaidan.syauqi.9"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/syauqykhairan"><i class="fa fa-twitter"></i></a>
                <a href="https://dribbble.com/syauqyzaidan"><i class="fa fa-dribbble"></i></a>
                <a href="https://www.behance.net/syaauqizaaidan"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Start Login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;"
                    id="exampleModalCenterTitle">
                    Learnify - Masuk Sekarang</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?=base_url('assets/');?>img/modal-login-2.png"
                                class="img-fluid img-responsive mx-auto " style="height: 350px;">
                        </div>
                        <div class=" col-md-6">
                            <form action="<?=base_url('welcome/index')?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="<?=set_value('email');?>" class="form-control"
                                        name="email" autocomplete="off" id="email"
                                        placeholder="Masukan email mu disini ..">
                                    <?=form_error('email', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukan password mu disini ..">
                                    <?=form_error('password', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href=" <?=base_url('user/registration')?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-block font-weight-bold"
                                    style="background-color: #4dbf1c;color:white;font-size:18px;">Login
                                    Sekarang!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->


<!-- Sweetaler Flashdata -->
<?php if ($this->session->flashdata('success-reg')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang kamu boleh login!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('login-success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('success-verify')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Email Telah Diverifikasi!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('success-logout')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil logout!',
    text: 'Selamat tinggal, Sampai jumpa lagi!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-login')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Gagal login!',
    text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-email')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Email Belum Diverifikasi!',
    text: 'Silahkan Cek Email Kamu Dahulu!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif;?>


<?php if ($this->session->flashdata('fail-pass')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Password Salah!',
    text: 'Silahkan Periksa Kembali Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>


<?php if ($this->session->flashdata('not-login')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Harap Login Terlebih Dahulu !',
    text: 'Silahkan Login Dahulu !',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif;?>

<script src="<?=base_url('assets/')?>js/stellar.js"></script>
<script src="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/counter-up/jquery.counterup.js"></script>
<script src="<?=base_url('assets/')?>js/mail-script.js"></script>
<script src="<?=base_url('assets/')?>js/theme.js"></script>
</body>

</html>

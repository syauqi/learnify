<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Kontak</h2>
                <div class="page_link">
                    <a href="<?=base_url('welcome')?>">Beranda</a>
                    <a href="<?=base_url('welcome/kontak')?>">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13"
            data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083"
            data-mlon="-74.1522848">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Jawa Barat, Indonesia</h6>
                        <p>Kabupaten Ciamis</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">
                                (0265) 771204</a></h6>
                        <p>Senin - Jumat | Jam 7 - Jam 5</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">surat@smkn1cms.net</a></h6>
                        <p>Email diatas hanya untuk keperluan penting!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <div class="companies20-content">

        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mr-auto">
                                    <h5>Selamat Datang di Desa Gayamharjo</h5>
                                    <p>Desa yang kaya akan Hasil Pertanian dan Tempat Wisata</p>
                                    <a class="btn btn-theme2 mt-md-5 mt-4" href="<?= 'Welcome/contact' ?>"> Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mr-auto">
                                    <h5>Selamat Datang di Desa Gayamharjo</h5>
                                    <p>Desa yang kaya akan Hasil Pertanian dan Tempat Wisata</p>
                                    <a class="btn btn-theme2 mt-md-5 mt-4" href="<?= 'Welcome/contact' ?>"> Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets') ?>/js/owl.carousel.js"></script>
    <!-- script for -->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- /main-slider -->
</section>

<section class="w3l-covers-18">
    <div class="covers-main editContent">
        <div class="container">
            <div class="gallery-image row">
                <div class="column color-2 editContentc col-lg-4 ">
                    <div>
                        <h4 class=" editContent">Gayamharjo Desa Makmur dengan Kekayaan Hasil Pertanian dan Pariwisata</h4>
                        <p style="text-align:justify" class="para editContent">Kami yakin Gayamharjo akan menjadi desa Agribisnis dan desa Wisata dengan kerjasama yang luas dengan pihak Pertanian dan Pariwisata di Indonesia</p>
                        <a href="<?php echo base_url('Welcome/about') ?>" class="action-button btn mt-3">Read more</a>
                    </div>
                </div>

                <div class="img-box col-lg-4 col-md-6">
                    <img src="<?= base_url('assets') ?>/images/outbond.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="#">Wisata Desa Nawung</a></h5>
                    <a href="https://goo.gl/maps/mTaQKKoeQwgqo6Y97" class="action-button btn mt-3">Rute</a>
                    <!-- <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p> -->
                </div>
                <div class="img-box col-lg-4 col-md-6">
                    <img src="<?= base_url('assets') ?>/images/airterjun.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="#">Jurug Gedhe</a></h5>
                    <a href="https://goo.gl/maps/bpTrsX6ZVn9mPT6s6" class="action-button btn mt-3">Rute</a>
                    <!-- <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="w3l-teams-15">
    <div class="team-single-main editContent">
        <div class="container">
            <div class="row">
                <div class="column2 image-text col-xl-6">
                    <h3 class="team-head editContent">BIOGAS - Energi Terbarukan dari Hasil Ternak</h3>
                    <div class="team-two">
                        <div class="nature-row">
                            <h5><a href="#page">
                                    Gayamharjo Mandiri Energi</a></h5>
                            <p style="text-align:justify" class="para editContent text ">
                                Dengan adanya BIOGAS ini diharapkan desa Gayamharjo akan Mandiri dari segi Energi karena Energi ini bisa dikelola sendiri dan tidak Perlu Maintenance / Perawatan yang sulit</p>
                        </div>
                        <div class="nature-row">
                            <h5><a href="#page">
                                    Energi dari Hasil Alam</a></h5>
                            <p style="text-align:justify" class="para editContent text ">
                                Limbah biogas, yaitu kotoran ternak yang telah hilang gasnya (slurry) merupakan pupuk organik yang sangat kaya akan unsur-unsur yang dibutuhkan oleh tanaman. Bahkan, unsur-unsur tertentu seperti protein, selulosa, lignin, dan lain-lain tidak bisa digantikan oleh pupuk kimia.
                                Dalam bentuk ini, gas tersebut dapat digunakan sama seperti penggunaan gas alam. Pemanfaatannya seperti distribusi melalui jaringan gas, pembangkit listrik, pemanas ruangan, dan pemanas air. Jika dikompresi, ia dapat menggantikan gas alam terkompresi (CNG) yang digunakan pada kendaraan.</p>
                            <a href="<?php echo base_url('Welcome/biogas') ?>" class="action-button btn mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="column2 image-text col-xl-6">
                    <img src="<?= base_url('assets') ?>/images/indigovera.jpg" alt="product" class="img-responsive ">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="w3l-call-to-action_9">
    <div class="call-w3 editContent">
        <div class="container">
            <div class="grids">
                <div class="grids-content row text-center">

                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">
                        <img src="<?= base_url('assets') ?>/images/top.jpg" alt="product" class="img-responsive rounded-0">
                    </div>

                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="<?php echo base_url('Welcome/article') ?>" class=" editContent">Artikel Desa Gayamharjo</a></h4>
                            <p class="para editContent"></p>

                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 editContent p-sm-0">
                        <img src="<?= base_url('assets') ?>/images/watugong.jpg" alt="product" class="img-responsive rounded-0 ">
                    </div>

                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="<?php echo base_url('Welcome/biogas') ?>" class=" editContent">Biogas</a></h4>
                            <p class="para editContent">Biogas merupakan gas yang dihasilkan oleh aktivitas anaerobik atau fermentasi dari bahan-bahan organik termasuk di antaranya kotoran manusia dan hewan, limbah domestik (rumah tangga), sampah biodegradable atau setiap limbah organik yang biodegradable dalam kondisi anaerobik. Kandungan utama dalam biogas adalah metana dan karbon dioksida.</p>

                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">
                        <img src="<?= base_url('assets') ?>/images/lamijo1.jpg" alt="product" class="img-responsive rounded-0">
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="<?php echo base_url('Welcome/services') ?>" class=" editContent">Tempat Wisata</a></h4>
                            <p class="para editContent">Telusuri Harta Karun Wisata di Desa Gayamharjo lebih jauh</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
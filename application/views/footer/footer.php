<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container">
            <div class="row footer-top-29">
                <div class="col-lg-5 col-md-5 col-sm-6 footer-list-29 footer-1">
                    <div class="left-side">
                        <h2><a href="index.html" class="footer-logo">Kantor Desa Gayamharjo</a></h2>
                        <p class="para">Jali, Gayamharjo, Prambanan, Sleman Regency, Special Region of Yogyakarta 55572</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-3">

                    <ul>
                        <h6 class="footer-title-29">Useful Links</h6>
                        <li><a href="<?php echo base_url('Welcome') ?>">Home</a></li>
                        <li><a href="<?php echo base_url('Welcome/about') ?>">Tentang</a></li>
                        <li><a href="<?php echo base_url('Welcome/biogas') ?>">Biogas</a></li>
                        <li><a href="<?php echo base_url('Welcome/contact') ?>">Kontak</a></li>
                    </ul>
                </div>

            </div>
        </div>
</section>
<section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
        <div class=" bottom-copies text-center">
            <p class="copy-footer-29">© 2020 KKN 74.29 E | Designed by <a href="https://www.facebook.com/adib.bachtiar.75">Adib Bachtiar</a></p>
        </div>
    </div>
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->
</body>

</html>
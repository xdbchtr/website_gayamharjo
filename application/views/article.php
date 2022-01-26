<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
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

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner about editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Artikel desa Gayamharjo
                </h3>
                <p class="tiltle-para editContent ">Artikel terkini terkait Desa Gayamharjo</p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="<?php echo base_url('Welcome') ?>" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Article</li>
                </ul>
            </div>
        </div>

    </div>

    </div>
</section>
<!-- breadcrumbs //-->
<?php foreach ($artikel as $art) : ?>
    <section class="w3l-content-with-photo-4" id="about">
        <div class="content-with-photo4-block editContent">
            <div class="container">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-xl-6">
                        <img src="<?php echo base_url() . 'assets/images/' . $art->namagambar ?>" class="img-responsive" alt="">
                    </div>
                    <div class="cwp4-text col-xl-6 ">
                        <div class="posivtion-grid">
                            <h6 class="sub-title"><?php echo $art->subhead ?></h6>
                            <h3 class="editContent"><?php echo $art->head ?></h3>
                            <p class="para editContent"><?php echo $art->isi ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php endforeach; ?>
<!-- ========================
        Services Layout 1
    =========================== -->
<section class="services-layout1 services-carousel">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-60">
                    <br> <!-- <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2> -->
                    <h3 class="heading__title">SPESIALIS YANG KAMI TERSEDIA</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                    <!-- service item #1 -->
                    <?php foreach ($spesialis as $s) : ?>
                        <div class="service-item">
                            <div class="service__icon">
                                <i class="icon-head"></i>
                                <i class="icon-head"></i>
                            </div><!-- /.service__icon -->
                            <div class="service__content">
                                <h4 class="service__title"><?= $s->title ?></h4>
                                <p class="service__desc"> <?= substr(strip_tags($s->content), 0, 100) ?>...
                                </p>

                                <a href="<?= site_url('detail/' . $s->slug) ?>" class="btn btn__secondary btn__outlined btn__rounded">
                                    <span>Detail..</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service__content -->
                        </div><!-- /.service-item -->
                    <?php endforeach; ?>

                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 1 -->
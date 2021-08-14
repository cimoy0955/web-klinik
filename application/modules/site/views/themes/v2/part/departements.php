<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                <div class="heading__layout2 mb-50">
                    <h3 class="heading__title color-white">LAYANAN YANG KAMI SEDIAKAN.</h3>
                </div>
            </div><!-- /col-lg-5 -->
        </div><!-- /.row -->

        <div class="row">


            <!-- Feature item #1 -->
            <?php foreach ($services as $service) : ?>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="<?= img_ori($service->img) ?>" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-heart"></i>
                            </div>
                            <h4 class="feature__title"><a href="<?= site_url('detail/' . $service->slug) ?>"><?= substr(strip_tags($service->title), 0, 50); ?></a></h4>
                        </div><!-- /.feature__content -->
                        <a href="<?= site_url('detail/' . $service->slug) ?>" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
            <?php endforeach; ?>


        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->
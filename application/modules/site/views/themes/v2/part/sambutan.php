<!-- ========================
      About Layout 3
    =========================== -->
<section class="about-layout3 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                <div class="heading-layout2">
                    <h2 class="heading__subtitle color-primary"></h2>
                    <h3 class="heading__title mb-60">Selamat Datang Di Website<br><?= get_site_setting('site_name') ?></h3>
                </div><!-- /heading -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- <div class="col-sm-12 col-md-12 col-lg-2">
                <div class="experience">

                    <h3 class="experience__text">dr. Fitriyanto Rajak</h3>
                    <p>Direktur <br><?= get_site_setting('site_name') ?></p>
                </div>
            </div> -->
            <?php foreach ($banners as $banner) : ?>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="video-banner-layout2 bg-overlay">
                        <img src="<?= base_url('assets/uploads/' . get_site_setting('foto_direktur')) ?>" alt="about" class="w-100">
                        <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                            <span class="video__btn-title color-white"><?= get_site_setting('nama_direktur') ?></span><br>


                        </a>
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-5 -->

                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="about__text">

                        <h4>Sambutan Direktur <br><?= get_site_setting('site_name') ?></h4>
                        <div class="post__desc">
                            <?= get_site_setting('sambutan') ?>
                        </div><!-- /.blog-desc -->
                        <!-- <p class="heading__desc font-weight-bold color-secondary mb-30">
                        
                        </p> -->

                        <!-- <a href="doctors-timetable.html" class="btn btn__secondary btn__rounded mt-40">
                        <span>Baca Lebih Banyak</span> <i class="icon-arrow-right"></i>
                    </a> -->
                    </div><!-- /.about__text -->
                </div><!-- /.col-lg-5 -->
            <?php endforeach; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 3 -->
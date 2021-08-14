<!-- ========================= 
      Testimonials layout 3
      =========================  -->
<section class="testimonials-layout3 pt-130 bg-overlay bg-overlay-secondary">
    <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
    <div class="container">
        <div class="testimonials-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading-layout2">
                        <h3 class="heading__title color-primary">Apa Kata Mereka?</h3>
                        <a href="#" id="isi_testimoni" class="btn btn__white btn__rounded btn__outlined">Isi Testimoni Anda</a>
                    </div><!-- /.heading -->

                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">


                    <div class="slider-with-navs">
                        <!-- Testimonial #1 -->
                        <?php foreach ($testimonials as $testimoni) : ?>
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“<?= $testimoni->content ?>”
                                </h3>
                            </div><!-- /. testimonial-item -->
                        <?php endforeach; ?>
                    </div><!-- /.slick-carousel -->


                    <div class="slider-nav mb-60">
                        <?php foreach ($testimonials as $testimoni) : ?>
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">

                                    <!-- <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb"> -->
                                    <?php if (empty($testimoni->img)) : ?>
                                        <img src="<?= site_url('assets/static-image/user.png') ?>" alt="author thumb">
                                    <?php else : ?>
                                        <img src="<?= site_url('assets/uploads/' . $testimoni->img) ?>" alt="author thumb">
                                    <?php endif; ?>
                                </div><!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title"><?= $testimoni->title ?></h4>
                                    <p class="testimonial__meta-desc">User Testi</p>
                                </div>
                            </div><!-- /.testimonial-meta -->
                        <?php endforeach; ?>
                    </div><!-- /.slider-nav -->



                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
    </div><!-- /.container -->
</section><!-- /.testimonials layout 3 -->
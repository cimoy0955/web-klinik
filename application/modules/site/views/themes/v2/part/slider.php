<!-- ============================
        Slider
    ============================== -->
<section class="slider">
    <!-- <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 20,"fade": true,"cssEase": "linear"}'> -->
    <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true,"speed": 700,"fade": true,"cssEase": "linear", "arrows": true, "dots": true}'>




        <?php foreach ($slides as $slide) : ?>



            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="<?= base_url('assets/uploads/' . $slide->guid) ?>" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div style="background: rgb(255 255 255 / 54%);
    white-space: normal !important;
    transition: none 0s ease 0s;
    line-height: 26px;
    border-width: 2px;
    margin: 0px;
    padding: 29px 35px 35px;
    letter-spacing: 0px;
    font-weight: 300;
    border-radius: 3%;" class="slide__content">

                                <h2 class="slide__title"><?= $slide->title ?></h2>
                                <p class="slide__desc"><?= $slide->content ?></p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <!-- <a href="about-us.html" class="btn btn__white btn__rounded mr-30">
                                        <span>More About Us</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> -->
                                    <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                        <div class="video__player">
                                            <i class="fa fa-play"></i>
                                        </div>
                                        <span class="video__btn-title color-secondary">Watch Our Video!</span>
                                    </a> -->
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->

        <?php endforeach; ?>

    </div><!-- /.carousel -->
</section><!-- /.slider -->
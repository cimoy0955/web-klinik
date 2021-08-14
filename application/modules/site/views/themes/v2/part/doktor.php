<!-- ======================
      Team
    ========================= -->
<section class="team-layout2 pb-80">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                    <h3 class="heading__title">DOKTER PROFESIONAL KAMI</h3>
                    <p class="heading__desc">Daftar Dokter Profesional Yang Kami Miliki.
                    </p>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>


                    <?php foreach (@$dokters as $dokter) : ?>
                        <!-- Member #1 -->
                        <div class="member">
                            <div class="member__img">

                                <?php if (is_null(@$dokter->foto)) : ?>
                                    <?php if ($dokter->id_jk == 1) : ?>

                                        <img src="<?= base_url('assets/static-image/male_dokter.jpg'); ?>" alt="member img">
                                    <?php else : ?>

                                        <img src="<?= base_url('assets/static-image/female_dokter.jpg'); ?>" alt="member img">
                                    <?php endif; ?>
                                <?php else : ?>

                                    <img src="http://36.95.134.244/<?= @$dokter->foto ?>" alt="member img">
                                <?php endif; ?>
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html"><?= @$dokter->nama_dokter ?></a></h5>
                                <p class="member__job"><?= @$dokter->nama_prodi ?></p>
                                <!-- <p class="member__desc">Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane
                                    University prior to attending St George's University School of Medicine</p> -->
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <a href="#" class="btn btn__secondary btn__link btn__rounded">
                                        <span>Lihat Jadwal</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <?php foreach ($jadwal as $j) : ?>

                                        <tr>
                                            <td style="color:green; font-weight:bold;"><?= @$j->hari; ?></td>
                                            <td style="color:green; font-weight:bold;"><?= @$j->jam; ?> #hari ini</td>
                                        </tr>

                                    <?php endforeach; ?>
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    <?php endforeach; ?>

                </div><!-- /.carousel -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    </div>
</section><!-- /.Team -->
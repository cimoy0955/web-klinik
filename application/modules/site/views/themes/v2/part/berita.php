<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid pt-0 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                    <br> <!-- <h2 class="heading__subtitle">Resource Library</h2> -->
                    <h3 class="heading__title">BERITA TERBARU</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Post Item #1 -->

            <?php foreach (latest_news(null) as $post) : ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="blog-single-post.html">
                                <img src="<?= img_ori($post->img) ?>" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__body">
                            <div class="post__meta-cat">
                                <a href="#">Life Style</a><a href="#">Nutrition</a>
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex">
                                <span class="post__meta-date"> <?= date('d', strtotime($post->created_on)) ?> <?= date('M', strtotime($post->created_on)) ?> <?= date('Y', strtotime($post->created_on)) ?></span>
                                <a class="post__meta-author" href="#"> <?= $post->author ?></a>
                            </div>
                            <h4 class="post__title"><a href="<?= site_url('detail/' . $post->slug) ?>"><?= substr(strip_tags($post->title), 0, 100) ?></a></h4>

                            <p class="post__desc"><?= substr(render_post_excerpt($post->content), 0, 170) ?>...
                            </p>
                            <a href="<?= site_url('detail/' . $post->slug) ?>" class="btn btn__secondary btn__link btn__rounded">
                                <span>Baca..</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.post__body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
            <?php endforeach; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->
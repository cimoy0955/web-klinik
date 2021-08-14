<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout5 bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Berita</h1>
                <nav>
                    <!-- <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol> -->
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      Blog Grid
    ========================= -->
<section class="blog-grid">
    <div class="container">
        <div class="row">


            <?php foreach (latest_news(null) as $post) : ?>
                <!-- Post Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="blog-single-post.html">
                                <img src="<?= img_thumb($post->img) ?>" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__body">
                            <div class="post__meta-cat">
                                <a href="<?= site_url('detail/' . $post->slug) ?>"></a>
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex">
                                <span class="post__meta-date"><?= date('d', strtotime($post->created_on)) ?> <?= date('M', strtotime($post->created_on)) ?> <?= date('Y', strtotime($post->created_on)) ?></span>
                                <a class="post__meta-author" href="#"><?= $post->author ?></a>
                            </div>
                            <h4 class="post__title"><a href="<?= site_url('detail/' . $post->slug) ?>"><?= substr(strip_tags($post->title), 0, 70) ?></a></h4>

                            <p class="post__desc"><?= substr(strip_tags($post->content), 0, 150) ?>...
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
        <div class="row">
            <div class="col-12 text-center">
                <nav class="pagination-area">
                    <ul class="pagination justify-content-center">
                        <li><a class="current" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->
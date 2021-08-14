<!-- ========================
       page title 
    =========================== -->
<section class="page-title pt-30 pb-30 text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Post</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $post->title ?></li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      Blog Single
    ========================= -->
<section class="blog blog-single pt-0 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="post-item mb-0">
                    <div class="post__img">
                        <a href="#">
                            <img src="<?= site_url('assets/uploads/' . $post->img) ?>" alt="post image" loading="lazy">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post__body pb-0">
                        <div class="post__meta-cat">
                            <!-- <a href="#">Consulting</a><a href="#">Sales</a> -->
                        </div><!-- /.blog-meta-cat -->
                        <div class="post__meta d-flex align-items-center mb-20">
                            <span class="post__meta-date"> <strong><?= date('d', strtotime($post->created_on)) ?></strong><i><?= date('M', strtotime($post->created_on)) ?></i></span>
                            <a class="post__meta-author" href="#"><?= $post->author ?></a>
                            <!-- <a class="post__meta-comments" href="#">2 coments</a> -->
                        </div><!-- /.blog-meta -->
                        <h1 class="post__title mb-30">
                            <?= $post->title ?>
                        </h1>
                        <div class="post__desc">
                            <?= $post->content; ?>
                        </div><!-- /.blog-desc -->
                    </div>
                </div><!-- /.post-item -->
                <div class="d-flex flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
                    <div class="blog-share d-flex flex-wrap align-items-center">
                        <strong class="mr-20 color-heading">Bagikan</strong>
                        <ul class="list-unstyled social-icons d-flex mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="whatsapp://send?text=<?= site_url('detail/' . $post->slug) ?>"><i class="fab fa-whatsapp"></i></a></li>

                        </ul>
                    </div><!-- /.blog-share -->
                    <!-- <div class="widget-tags">
                        <ul class="list-unstyled d-flex flex-wrap mb-0">
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Employee</a></li>
                        </ul>
                    </div> -->
                </div>

                <!-- <div class="blog-author d-flex flex-wrap mb-70">
                    <div class="blog-author__avatar">
                        <img src="assets/images/blog/author/1.jpg" alt="avatar">
                    </div>
                    <div class="blog-author__content">
                        <h6 class="blog-author__name">Mahmoud Baghagho</h6>
                        <p class="blog-author__bio">Founded by Begha over many cups of tea at her kitchen table in 2009, our
                            brand promise is simple: to
                            provide powerful digital marketing solutions to small and medium businesses.</p>
                        <ul class="social-icons list-unstyled mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                        </ul>
                    </div>
                </div> -->
                <div class="blog-comments mb-70">
                    <h5 class="blog-widget__title">2 Komentar</h5>
                    <ul class="comments-list list-unstyled">
                        <li class="comment__item">
                            <div class="comment__avatar">
                                <img src="assets/images/blog/author/2.jpg" alt="avatar">
                            </div>
                            <div class="comment__content">
                                <h5 class="comment__author">Richard Muldoone</h5>
                                <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                                <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                                    can be a perfect example
                                    of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                                    numbers if that was the site of a mattress selling company.</p>
                                <a class="comment__reply" href="#">reply</a>
                            </div>
                            <ul class="nested__comment list-unstyled">
                                <li class="comment__item">
                                    <div class="comment__avatar">
                                        <img src="assets/images/blog/author/3.jpg" alt="avatar">
                                    </div>
                                    <div class="comment__content">
                                        <h5 class="comment__author">Mike Dooley</h5>
                                        <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                                        <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                                            WBF can be a perfect
                                            example of new keywords and content, and broadening the funnel as well. I can only imagine the
                                            sale numbers if that was the site of a mattress selling company.</p>
                                        <a class="comment__reply" href="#">reply</a>
                                    </div>
                                </li><!-- /.comment -->
                            </ul><!-- /.nested-comment -->
                        </li><!-- /.comment -->
                    </ul><!-- /.comments-list -->
                </div><!-- /.blog-comments -->
                <div class="blog-widget blog-comments-form mb-30">
                    <h5 class="blog-widget__title">Tinggalkan Komentar Anda</h5>
                    <form>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email:">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website:">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-lg-12 -->
                            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                                <button type="submit" class="btn btn__primary btn__rounded btn__xl">
                                    <span>Submit Comment</span> <i class="icon-arrow-right"></i>
                                </button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.blog-comments-form -->
            </div><!-- /.col-lg-8 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar">
                    <div class="widget widget-search">
                        <div class="slick-carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

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

                        </div>
                    </div><!-- /.widget-search -->
                    <div class="widget widget-posts">
                        <h5 class="widget__title">Berita Terbaru</h5>
                        <div class="widget__content">

                            <!-- post item #1 -->
                            <?php foreach (latest_news($post->post_id) as $post) : ?>
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="<?= site_url('detail/' . $post->slug) ?>"><img src="<?= img_thumb($post->img) ?>" alt="thumb"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget-post__content">
                                        <span class="widget-post__date"> <?= date('d', strtotime($post->created_on)) ?> <?= date('M', strtotime($post->created_on)) ?> <?= date('Y', strtotime($post->created_on)) ?></span>
                                        <h4 class="widget-post__title"> <a href="<?= site_url('detail/' . $post->slug) ?>"><?= substr(strip_tags($post->title), 0, 75) ?></a>
                                        </h4>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                            <?php endforeach; ?>

                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-posts -->
                    <div class="widget widget-categories">
                        <h5 class="widget__title">Kategori</h5>
                        <div class="widget-content">
                            <ul class="list-unstyled mb-0">

                                <?php foreach (get_categories() as $category) : ?>
                                    <li><a href="<?= site_url('category/' . $category->slug) ?>"><span class="cat-count">#</span><span><?= $category->name ?></span></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-categories -->

                    <!-- <div class="widget widget-tags">
                        <h5 class="widget__title">Tags</h5>
                        <div class="widget-content">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Insights</a></li>
                                <li><a href="#">Industry</a></li>
                                <li><a href="#">Modern</a></li>
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>
                    </div> -->
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
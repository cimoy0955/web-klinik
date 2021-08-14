<!-- ========================
      Footer
    ========================== -->

<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-about">
                        <img src="<?= base_url('assets/uploads/' . get_site_setting('site_icon')) ?>" alt="logo" class="mb-30">
                        <p class="color-gray"> <?= get_site_setting('site_address') ?>
                        </p>
                        <!-- <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                            <span>a</span> <i class="icon-arrow-right"></i>
                        </a> -->
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Lest News</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <?php foreach (latest_news(null) as $post) : ?>
                                    <li><a style="color:white;" href="<?= site_url('detail/' . $post->slug) ?>"><i class="fa fa-angle-right"></i> <?= substr(strip_tags($post->title), 0, 20) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Link Terkait</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a style="color:white;" target="_blank" href="<?= @get_site_setting('site_link_1'); ?>"><i class="fa fa-angle-right"></i> <?= @get_site_setting('site_name_link_1'); ?></a></li>
                                <li><a style="color:white;" target="_blank" href="<?= @get_site_setting('site_link_2'); ?>"><i class="fa fa-angle-right"></i> <?= @get_site_setting('site_name_link_2'); ?></a></li>
                                <li><a style="color:white;" target="_blank" href="<?= @get_site_setting('site_link_3'); ?>"><i class="fa fa-angle-right"></i> <?= @get_site_setting('site_name_link_3'); ?></a></li>
                                <li><a style="color:white;" target="_blank" href="<?= @get_site_setting('site_link_4'); ?>"><i class="fa fa-angle-right"></i> <?= @get_site_setting('site_name_link_4'); ?></a></li>

                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget__title color-heading">Hubungi Kami</h6>
                        <ul class="contact-list list-unstyled">
                            <li>If you have any questions or need help, feel free to contact with our team.</li>
                            <li>
                                <a href="tel:01061245741" class="phone__number">
                                    <i class="icon-phone"></i> <span>01061245741</span>
                                </a>
                            </li>
                            <li class="color-body"><?= get_site_setting('site_address') ?></li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                                <i class="icon-arrow-right"></i> <span>Lihat Lokasi</span>
                            </a>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <span class="fz-14">
                        <p>Copyright © <?= date('Y') ?> <?= get_site_setting('site_name') ?>. All rights reserved.</p>
                    </span>

                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <nav>
                        <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                            <li><a class="fz-14 color-primary" href="https://klikdata.co.id">Klik Data Indonesia</a></li>

                        </ul>
                    </nav>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->
<div class="search-popup">
    <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
    <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="icon-search"></i></button>
    </form>
</div><!-- /. search-popup -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
</div><!-- /.wrapper -->

<script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script type="text/javascript">
    var dialog = $("#dialog-form").dialog({
        autoOpen: !1,
        height: 400,
        width: 350,
        modal: !0,
        buttons: {
            "Submit": submit,
            Cancel: function() {
                dialog.dialog("close")
            }
        },
        close: function() {}
    });

    function submit() {
        var data = new FormData($('#testimoni-form')[0]);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('testimoni') ?>',
            data: data,
            contentType: !1,
            processData: !1,
            dataType: 'json',
            success: function(response) {
                $('.text-danger').remove();
                if (response.status === !1) {
                    $.each(response.error, function(index, value) {
                        $('#' + index).after(value)
                    })
                } else {
                    dialog.dialog('close')
                    alert(response.pesan)
                }
            }
        })
    }
    $("#isi_testimoni").button().on("click", function(e) {
        e.preventDefault();
        dialog.dialog("open")
    });
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none"
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none"
        }
    }
    $('.not-available').click(function() {
        $('.modal').css('display', 'block')
    })
</script>
</body>

</html>
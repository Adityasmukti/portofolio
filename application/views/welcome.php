<!-- Header -->
<?php $this->load->view('header'); ?>
<!-- Costume CSS -->

<!-- End Costume CSS -->
</head>
<!-- End Header -->

<body>
  <!-- Colorlib Page -->
  <div id="colorlib-page">
    <!-- Sidebar -->
    <?php $this->load->view('sidebar'); ?>
    <!-- End Sidebar -->
    <div id="colorlib-main">
      <!-- Main Content -->
      <section class="ftco-section-no-padding bg-light">
        <div class="hero-wrap">
          <div class="overlay"></div>
          <div class="d-flex align-items-center js-fullheight">
            <div class="author-image text img d-flex">
              <section class="home-slider js-fullheight owl-carousel">
                <div class="slider-item js-fullheight" style="background-image: url(<?= base_url() ?>/upload/images/author.jpg);">
                </div>
                <div class="slider-item js-fullheight" style="background-image:url(<?= base_url() ?>/upload/images/author-2.jpg);">
                </div>
              </section>
            </div>
            <div class="author-info text p-3 p-md-5">
              <div class="desc">
                <span class="subheading">Aditias Muktiyanto</span>
                <h1 class="big-letter">Aditias Muktiyanto</h1>
                <h1 class="mb-4"><span>Aditias Muktiyanto</span> A Software Engineer. <span>I Make Life Easier</span></h1>
                <p class="mb-4">I am A Photographer from America Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <h3 class="signature h1">Aditias Muktiyanto</h3>
                <ul class="ftco-social mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ftco-section instagram">
        <div class="container">
          <div class="row justify-content-center mb-2 pb-3">
            <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
              <h2 class="mb-4">Follow me on Instagram</h2>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
              <a href="<?= base_url('assets') ?>/images/image_1.jpg" class="insta-img image-popup" style="background-image: url(<?= base_url('assets') ?>/images/image_1.jpg);">
                <div class="icon d-flex justify-content-center">
                  <span class="icon-instagram align-self-center"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
              <a href="<?= base_url('assets') ?>/images/image_2.jpg" class="insta-img image-popup" style="background-image: url(<?= base_url('assets') ?>/images/image_2.jpg);">
                <div class="icon d-flex justify-content-center">
                  <span class="icon-instagram align-self-center"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
              <a href="<?= base_url('assets') ?>/images/image_3.jpg" class="insta-img image-popup" style="background-image: url(<?= base_url('assets') ?>/images/image_3.jpg);">
                <div class="icon d-flex justify-content-center">
                  <span class="icon-instagram align-self-center"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
              <a href="<?= base_url('assets') ?>/images/image_4.jpg" class="insta-img image-popup" style="background-image: url(<?= base_url('assets') ?>/images/image_4.jpg);">
                <div class="icon d-flex justify-content-center">
                  <span class="icon-instagram align-self-center"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
              <a href="<?= base_url('assets') ?>/images/image_5.jpg" class="insta-img image-popup" style="background-image: url(<?= base_url('assets') ?>/images/image_5.jpg);">
                <div class="icon d-flex justify-content-center">
                  <span class="icon-instagram align-self-center"></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Main Content -->
      <!-- Footer -->
      <?php $this->load->view('footer'); ?>
      <!-- End Footer -->
    </div><!-- END COLORLIB-MAIN -->
  </div><!-- END COLORLIB-PAGE -->
  <!-- Script Load -->
  <?php $this->load->view('script'); ?>
  <script>

  </script>
  <!-- End Script Load -->
</body>

</html>
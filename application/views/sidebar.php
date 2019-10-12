    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="<?= base_url() ?>"><span class="img" style="background-image: url(<?= base_url() ?>/upload/images/author.jpg);"></span>Adityasmukti</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li <?php if ($this->uri->segment(1) == 'welcome') {
                        echo 'class="colorlib-active"';
                    } ?>><a href="<?= base_url('welcome') ?>">Home</a></li>
                <li <?php if ($this->uri->segment(1) == 'collection') {
                        echo 'class="colorlib-active"';
                    } ?>><a href="<?= base_url('collection') ?>">Collection</a></li>
                <li <?php if ($this->uri->segment(1) == 'about') {
                        echo 'class="colorlib-active"';
                    } ?>><a href="<?= base_url('about') ?>">About Me</a></li>
                <li <?php if ($this->uri->segment(1) == 'services') {
                        echo 'class="colorlib-active"';
                    } ?>><a href="<?= base_url('services') ?>">My Services</a></li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li <?php if ($this->uri->segment(1) == 'contact') {
                        echo 'class="colorlib-active"';
                    } ?>><a href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">

        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
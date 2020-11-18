<!-- Loader -->
<!-- <div class='loading'>
    <div class='lds-dual-ring'></div>
</div> -->

<!-- Navbar -->
<header id="header-4">
    <div class="header-4-upper">
        <div class="wand-container">
            <span class="header-4-upper__contact-area">
                <a class="header-4-upper__contact" href="#">
                    <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/mailcontact.png" alt="mailcontact">
                    <?= $website['email']; ?>
                </a>
                <a class="header-4-upper__contact" href="#">
                    <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/header4phone.png" alt="phone">
                    <?= $website['phone']; ?>
                </a>
            </span>
            <span class="header-4-upper__social">
                <a href="<?= $website['ig']; ?>" target="_blank"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/header4upperIns.png" alt="header4ins"></a>
                <a href="<?= $website['fb']; ?>" target="_blank"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/header4face.png" alt="face"></a>
                <a href="<?= $website['tw']; ?>" target="_blank"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/header4twitter.png" alt="twitter"></a>
            </span>
        </div>
    </div>
    <div class="wand-container">
        <div class="header-content2--style2">

            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="#"><img src="<?php echo base_url(); ?>assets/img/icon/<?= $website['logo']; ?>" width="100px" alt="logo"></a>
            </div>

            <nav class="header-2-nav">
                <span class="header-4-upper__contact-area-mobile">
                    <a class="header-4-upper__contact" href="#">
                        <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/mailcontact.png" alt="mailcontact">
                        <?= $website['email']; ?>
                    </a>
                    <a class="header-4-upper__contact" href="#">
                        <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/header4phone.png" alt="phone">
                        <?= $website['phone']; ?>
                    </a>
                </span>
                <ul>

                    <?php if ($homeactive_halaman == '1') { ?>
                        <li><a href="<?php echo base_url() ?>" class="marked2">HOME</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url() ?>">HOME</a></li>
                    <?php } ?>

                    <?php if ($this->uri->segment('1') == 'tours') { ?>
                        <li><a href="<?php echo base_url('tours') ?>" class="marked2">TOUR LIST</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('tours') ?>">TOUR LIST</a></li>
                    <?php } ?>

                    <li><a href="#">HOW TO BOOK</a></li>
                    <li><a href="#">TESTIMONIALS</a></li>
                    <li><a href="#">CONTACT US</a></li>

                    <li class="header-content2--style2__account">
                        <a class="account" href="#"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/account.png" alt="account"></a>
                        <a class="account header-search">
                            <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/headersearch.png" alt="headersearch">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search-area">
                <div class="search-area__close"></div>
                <form action="#">
                    <input class="search-area__input" placeholder="Search..." type="text">
                    <button class="search-area__submit" type="submit"><span>Hit Enter to search or Esc key to close</span></button>
                </form>
            </div>

            <nav class="header-nav-mobile">
                <ul>
                    <li><a href="<?php echo base_url() ?>" class="marked2">HOME</a></li>
                    <li><a href="<?php echo base_url('tours') ?>">TOUR LIST</a></li>
                    <li><a href="#">HOW TO BOOK</a></li>
                    <li><a href="#">TESTIMONIALS</a></li>
                    <li><a href="#">CONTACT US</a></li>

                    <li>
                        <div class="header-nav-mobile__search-area">
                            <a class="header-nav-mobile__signin" href="#"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/account.png" alt="account"></a>
                            <a class="header-nav-mobile__search-bar">
                                <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/headersearch.png" alt="headersearch">
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="header-content2__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
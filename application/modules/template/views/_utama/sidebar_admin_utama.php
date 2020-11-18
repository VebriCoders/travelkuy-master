<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index"><?= $website['nama_website']  ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index"><i class="fa fa-route"></i></a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Beranda</li>
            <!-- Menu home dashboard -->

            <?php if ($this->uri->segment('1') == 'beranda') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('beranda'); ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('beranda'); ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
            <?php } ?>


            <?php if ($this->uri->segment('1') == 'profile') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('profile'); ?>"><i class="fas fa-user-circle"></i> <span>Profile</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('profile'); ?>"><i class="fas fa-user-circle"></i> <span>Profile</span></a></li>
            <?php } ?>


            <li class="menu-header">Master Data</li>
            <?php if ($this->uri->segment('1') == 'destination') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('destination'); ?>"><i class="fas fa-map-marked-alt"></i> <span>Destination</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('destination'); ?>"><i class="fas fa-map-marked-alt"></i> <span>Destination</span></a></li>
            <?php } ?>

            <?php if ($this->uri->segment('1') == 'tour') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('tour'); ?>"><i class="fas fa-route"></i> <span>Tour & Travel</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('tour'); ?>"><i class="fas fa-route"></i> <span>Tour & Travel</span></a></li>
            <?php } ?>

            <?php if ($this->uri->segment('1') == 'testimonials') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('testimonials'); ?>"><i class="fas fa-users"></i> <span>Testimonials</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('testimonials'); ?>"><i class="fas fa-users"></i> <span>Testimonials</span></a></li>
            <?php } ?>

            <?php if ($this->uri->segment('1') == 'gallery') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('gallery'); ?>"><i class="fas fa-images"></i> <span>Gallery</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('gallery'); ?>"><i class="fas fa-images"></i> <span>Gallery</span></a></li>
            <?php } ?>



            <li class="menu-header">Setting</li>

            <?php if ($this->uri->segment('1') == 'user_management') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('user_management'); ?>"><i class="fas fa-users-cog"></i> <span>User Management</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('user_management'); ?>"><i class="fas fa-users-cog"></i> <span>User Management</span></a></li>
            <?php } ?>

            <?php if ($this->uri->segment('1') == 'setting') { ?>
                <li class="active"><a class="nav-link" href="<?php echo base_url('setting'); ?>"><i class="fas fa-cogs"></i> <span>Setting Application</span></a></li>
            <?php } else { ?>
                <li><a class="nav-link" href="<?php echo base_url('setting'); ?>"><i class="fas fa-cogs"></i> <span>Setting Application</span></a></li>
            <?php } ?>


        </ul>

    </aside>
</div>
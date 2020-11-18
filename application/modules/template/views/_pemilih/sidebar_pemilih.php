<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">

            <?php if ($this->uri->segment('1') == 'pemilih_beranda') { ?>
                <li class="nav-item active">
                    <a href="<?php echo base_url('pemilih_beranda') ?>" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('pemilih_beranda') ?>" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
                </li>
            <?php } ?>

            <?php if ($this->uri->segment('1') == 'pemilih_memilih') { ?>
                <?php if ($this->uri->segment('1') == 'pemilih_memilih' && $this->uri->segment('2') == 'buka_surat') { ?>
                    <li class="nav-item active">
                        <a href="<?php echo base_url('pemilih_memilih') ?>" class="nav-link"><i class="fas fa-user-check"></i><span>Memilih (Buka Surat)</span></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item active">
                        <a href="<?php echo base_url('pemilih_memilih') ?>" class="nav-link"><i class="fas fa-user-check"></i><span>Memilih</span></a>
                    </li>
                <?php } ?>
            <?php } else { ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('pemilih_memilih') ?>" class="nav-link"><i class="fas fa-user-check"></i><span>Memilih</span></a>
                </li>
            <?php } ?>


        </ul>

        <?php if ($this->uri->segment('1') == 'pemilih_beranda') { ?>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('pemilih_beranda') ?>">Beranda</a></div>
                <!-- <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item">Top Navigation</div> -->
            </div>
        <?php } ?>

        <?php if ($this->uri->segment('1') == 'pemilih_memilih') { ?>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('pemilih_memilih') ?>">Memilih</a></div>
                <!-- <div class="breadcrumb-item"><a href="#">Memilih</a></div> -->
                <!-- <div class="breadcrumb-item">Top Navigation</div> -->
            </div>
        <?php } ?>

    </div>
</nav>
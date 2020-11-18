<section>
    <div class="page-banner">
        <div class="container">
            <div class="page-banner__tittle">
                <h1><?= $website['nama_website']; ?></h1>
                <p>List Travel & Tour</p>
            </div>
        </div>
    </div>
</section>

<section class="grid-left-sidebar">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="grid-left-sidebar__filter">
                    <span class="grid-left-sidebar__filter--result"><?= $jml_data_travel; ?> Results Found</span>

                    <?php echo form_open_multipart('tours/search'); ?>
                    <div class="grid-left-sidebar__filter--mode">
                        <div class="contact-infomation__item contact-infomation__form">
                            <?php $data_sebelum_cari = $this->input->post('cari_tours') ?>
                            <input type="text" name="cari_tours" id="cari_tours" value="<?= $data_sebelum_cari; ?>">
                        </div>
                        <div style="margin-left: 10px;">
                            <button class="btn btn-icon btn-secondary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>

                <div class="row">


                    <?php
                    $i = 1;
                    foreach ($tampilDataTour_Home as $tour) { ?>

                        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-12">
                            <a href="<?= base_url('tours/detail/' . $tour['slug_url']) ?>" class="trending-tour-item">
                                <!-- <div class="trending-tour-item__sale"></div> -->
                                <img class="trending-tour-item__thumnail" src="<?php echo base_url('assets/') ?>upload/foto_tour/<?= $tour['photo'] ?>" alt="tour1">
                                <div class="trending-tour-item__info">
                                    <h3 class="trending-tour-item__name">
                                        <?= $tour['nama_tour_travel'] ?>
                                    </h3>
                                    <div class="trending-tour-item__group-infor">
                                        <div class="trending-tour-item__group-infor--left">
                                            <!-- <span class="trending-tour-item__group-infor__rating"></span> -->
                                            <span class="trending-tour-item__name">(<?= $tour['nmdesti'] ?>)</span>
                                            <div class="trending-tour-item__group-infor__lasting"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/tours/lasting.png" alt="lasting"><?= $tour['waktu_tour_travel'] ?></div>
                                        </div>

                                        <!-- <p class="trending-tour-item__group-infor__sale-price">$999</p> -->
                                        <span class="trending-tour-item__group-infor__price"><?= $tour['harga_tour_travel'] ?></span>

                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php $i++;
                    } ?>

                </div>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


                <!-- pagination -->
                <div class="wander-pagination__pagination">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
    </div>
</section>
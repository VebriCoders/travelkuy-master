<section>
    <div class="slider-banner-3">
        <div class="slider-banner-3__item ">
            <img src="<?php echo base_url('assets/template_travel/') ?>assets/images/uploads/pagebanner/JUNE2edit-1.jpg" width="3000" alt="slider3">
            <div class="slider-banner-3__item__text animated bounceIn">

                <div class="slider-banner-3__destination">
                    <span><i class="fas fa-map-marker"></i>Malang - Indonesia</span>
                    <h1>TOUR & TRAVEL <?= $website['nama_website']; ?></h1>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="index-4-form-area animated slideInUp">
        <div class="container">
            <div class="form-area">
                <form id="wanderlust-form1" action="#">
                    <div class="form__item ">
                        <label>NAME TOUR & TRAVEL</label>
                        <div class="form__item--name">
                            <span class="far fa-calendar-alt"></span>
                            <input type="text" value="NAME TOUR & TRAVEL">
                        </div>
                    </div>
                    <div class="form__item form__item--select">
                        <label>DESTINATION</label>
                        <div class="custom-select">
                            <select>
                                <option>Select destinaion</option>
                                <option value="SanFrancisco">MALANG</option>
                                <option value="NewYork">BALI</option>
                                <option value="California">SURABAYA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form__item form__item--submit">
                        <input type="submit" value="FIND NOW">
                    </div>

                </form>
            </div>
        </div>
    </div> -->

</section>


<!-- Content -->

<section id="special-tour">
    <img class="worldBrg" src="<?php echo base_url('assets/template_travel/') ?>assets/images/worldBrg.png" alt="worldBrg">
    <div class="wand-container">
        <div class="special-tour">
            <div class="row">
                <div id="special-tour__tittle" class="col-xl-3 col-lg-3">
                    <div class="special-tour__tittle">
                        <div class="section-tittle">
                            <h2>Exlore</h2>
                            <div class="section-tittle__line-under"></div>
                            <p>New <span>Tours</span></p>
                        </div>
                        <p class="special-tour__sub-tittle">Some Of Our Latest Tours</p>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-sm-12">
                    <div class="row">
                        <div id="special-tour-container" class="container">
                            <div id="special-tour-slider" class="row">

                                <?php
                                $i = 1;
                                foreach ($tampilDataTour_Home->result() as $tour) { ?>
                                    <div class="special-tour-slider__item">
                                        <a href="tour-item.html" class="trending-tour-item">
                                            <!-- <div class="trending-tour-item__sale"></div> -->
                                            <img class="trending-tour-item__thumnail" src="<?php echo base_url('assets/') ?>upload/foto_tour/<?php echo $tour->photo ?>" height="200px" alt="tour1">
                                            <div class="trending-tour-item__info">
                                                <h3 class="trending-tour-item__name">
                                                    <?php echo $tour->nama_tour_travel ?>
                                                </h3>
                                                <div class="trending-tour-item__group-infor">
                                                    <div class="trending-tour-item__group-infor--left">
                                                        <!-- <span class="trending-tour-item__group-infor__rating"></span> -->
                                                        <span class="trending-tour-infor__sale-price">(<?php echo $tour->harga_tour_travel ?>)</span>
                                                        <div class="trending-tour-item__group-infor__lasting"><img src="<?php echo base_url('assets/template_travel/') ?>assets/images/tours/lasting.png" alt="lasting"><?php echo $tour->waktu_tour_travel ?></div>

                                                    </div>

                                                    <!-- <p class="trending-tour-item__group-infor__sale-price"><?php echo $tour->harga_tour_travel ?></p> -->
                                                    <!-- <span class="trending-tour-item__group-infor__price"></span> -->

                                                </div>
                                                <div class="special-tour-slider__item__excerpt">
                                                    <?php echo substr($tour->deskripsi_tour_travel, 0, 50) . "....." ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php $i++;
                                } ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="galery-h2">Gallery</h2>
    <div class="gallery">

        <?php
        $i = 1;
        foreach ($tampilDataGallery_Home->result() as $gallery) { ?>
            <img src="<?php echo base_url('assets/') ?>upload/foto_gallery_travel/resize/<?php echo $gallery->photo ?>" alt="<?php echo $gallery->title ?>">
        <?php $i++;
        } ?>
    </div>
    <div class="container">
        <div class="gallery-control">
            <span><?= $website['nama_website']; ?> Photo Gallery</span>
            <div class="gallery-control__left">
                <div class="gallery-control__counter">
                    <span class="gallery-control__counter--current"></span>
                    <span class="gallery-control__counter--cross">|</span>
                    <span class="gallery-control__counter--total"></span>
                </div>
                <div class="gallery-control__arrow">
                    <span class="leftArrow"><i class='fa fa-angle-left'></i></span>
                    <span class="rightArrow"><i class='fa fa-angle-right'></i></span>
                </div>
            </div>
        </div>
    </div>
</section>




<section>
    <div class="container">
        <div class="top-desti__tittle">
            <div class="section-tittle">
                <h2>List Destination</h2>
                <div class="section-tittle__line-under"></div>
                <p>List <span>Destination</span></p>
            </div>
        </div>
    </div>

    <div class="top-desti">

        <?php
        $i = 1;
        foreach ($tampilDataDestinasi_Home->result() as $destinasi) { ?>
            <a href="destination-item.html" class="top-desti__item">
                <img src="<?php echo base_url('assets/') ?>upload/foto_destinasi/<?php echo $destinasi->photo ?>" width="300px" height="200px" alt="desti1">
                <div class="top-desti__ammout">
                    <span><i class="fa fa-map-marker"></i><?php echo $destinasi->nama_destinasi ?></span>
                    <!-- <span>38 Tours</span> -->
                </div>
            </a>
        <?php $i++;
        } ?>

    </div>
</section>
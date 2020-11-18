<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Beranda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Beranda</div>
                <!-- <div class="breadcrumb-item"><a href="">Master Data</a></div> -->
                <!-- <div class="breadcrumb-item">Surat Suara</div> -->
            </div>
        </div>

        <h2 class="section-title">Hi, <?php echo $this->session->userdata('nama') ?> - <?php if ($this->session->userdata('id_role') == "1") { ?> Admin <?php } else { ?>Panitia <?php } ?>!</h2>
        <p class="section-lead">
            Selamat Datang Di Evoting Lite.
        </p>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-id-badge"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pemilih Terdaftar</h4>
                        </div>
                        <div class="card-body">
                            100
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-address-card"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kandidat Terdaftar</h4>
                        </div>
                        <div class="card-body">
                            6
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Saksi terdaftar</h4>
                        </div>
                        <div class="card-body">
                            4
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Surat Suara</h4>
                        </div>
                        <div class="card-body">
                            2
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Suara Masuk</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">100</div>
                            <div class="font-weight-bold mb-1">Ketua Osis SMK Negeri 8 Malang</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">60</div>
                            <div class="font-weight-bold mb-1">Kades Dusun Okeh</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">0</div>
                            <div class="font-weight-bold mb-1">Ketua Kelas</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">50</div>
                            <div class="font-weight-bold mb-1">Kader Perpus</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">28</div>
                            <div class="font-weight-bold mb-1">Ketua SARPRAS</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Aktifitas Pemilihan</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="http://localhost/stisla-ci/assets/img/avatar/avatar-1.png" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right text-primary">Now</div>
                                    <div class="media-title">Vebri Pradana</div>
                                    <span class="text-small text-muted">Memilih "Cak Ikin" Pada Surat Suara "Kades Dusun Okeh".</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="http://localhost/stisla-ci/assets/img/avatar/avatar-2.png" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right">12m</div>
                                    <div class="media-title">Hafidh Febri</div>
                                    <span class="text-small text-muted">Memilih "Boni" Pada Surat Suara "Ketua Osis SMK Negeri 8 Malang".</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="http://localhost/stisla-ci/assets/img/avatar/avatar-3.png" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right">17m</div>
                                    <div class="media-title">Maulana Nathan</div>
                                    <span class="text-small text-muted">Memilih "Cak Bokir" Pada Surat Suara "Kades Dusun Okeh".</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="http://localhost/stisla-ci/assets/img/avatar/avatar-4.png" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right">21m</div>
                                    <div class="media-title">David Wahid</div>
                                    <span class="text-small text-muted">Memilih "Pebri" Pada Surat Suara "Ketua Osis SMK Negeri 8 Malang".</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="http://localhost/stisla-ci/assets/img/avatar/avatar-5.png" alt="avatar">
                                <div class="media-body">
                                    <div class="float-right">21m</div>
                                    <div class="media-title">Reyhan Burhan</div>
                                    <span class="text-small text-muted">Memilih "Boni" Pada Surat Suara "Ketua Osis SMK Negeri 8 Malang".</span>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="#" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>


<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        <?= $this->session->flashdata('selamat-datang'); ?>

        function selamat_datang() {
            iziToast.info({
                title: 'Selamat Datang di Evoting Lite!',
                message: 'Buat Voting Anda Jadi Lebih Mudah',
                position: 'topCenter'
            });
        }
    });
</script>
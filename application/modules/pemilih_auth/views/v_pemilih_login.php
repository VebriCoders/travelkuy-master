<?php $this->load->view('_template/header'); ?>

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?php echo base_url() ?>assets/img/icon/<?= $website['logo']; ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Masuk Pemilih</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="#" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="nomor_pemilih" class="control-label">Nomor Pemilihan</label>
                                    </div>
                                    <input id="nomor_pemilih" type="text" class="form-control" name="nomor_pemilih" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                    <div class="d-block">
                                        <div class="float-right">
                                            <a href="<?php echo base_url('pemilih_auth/lupa_nomor') ?>" class=" text-small">
                                                Kamu Lupa Nomor Pemilih ?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="mt-5 text-muted text-center">
                        Kamu Belum Punya Akun ? <a href="<?php echo base_url('pemilih_auth/register_pemilih') ?>">Yuk Buat Akun Kamu</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; 2020 <br>
                        Design By <a href="https://www.instagram.com/vebritok_blo/" target="_blank">Vebri Yusdi Putra Pradana</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('_template/footer'); ?>
<?php $this->load->view('_template/header'); ?>

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="<?php echo base_url() ?>assets/img/icon/<?= $website['logo']; ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Pendaftaran Pemilih</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nomor_pemilih">Nomor Pemilih (NIK)</label>
                                        <input id="nomor_pemilih" type="text" class="form-control" name="nomor_pemilih" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nama_lengkap">Name Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="phone" class="d-block">Nomor Wa/Telp</label>
                                        <input id="phone" type="number" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="alamat">Alamat</label>
                                        <input id="alamat" type="text" class="form-control" name="alamat">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control selectric">
                                            <option>Pilih Jenis Kelamin</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="0">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">Aku Sudah Yakin Dengan Data Yang Di Masukkan</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        <a href="<?php echo base_url('pemilih_auth') ?>">Kembali Ke Login</a>
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
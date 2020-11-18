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
                            <h4>Lupa Nomor Pemilih</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">Kamu bisa masukkan email untuk mengetahui nomor pemilihan kamu atau Whatsapp Admin Ya</p>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="email">Email Kamu</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Kirim Nomor Pemilih Aku
                                    </button>
                                </div>
                            </form>

                            <hr>
                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">Whatsapp Admin Juga Bisa</div>
                            </div>
                            <div class="d-block">
                                <div class="text-center">
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62895367081854&text=Min%20bantu%20aku%20mencari%20nomor%20pemilihan%20ku,%0A*=======Data%20Kamu=======*%0ANama%20Kamu%20:%0AEmail%20Kamu%20:%0A%0ATolong Ya Min." class="btn btn-icon icon-left btn-lg btn-success"><i class="ion-social-whatsapp-outline"></i> Whatsapp</a>
                                </div>
                            </div>
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
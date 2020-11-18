<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pemilih</h1>
            <div class="section-header-button">
                <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambah-data"><i class="far fa-edit"></i> Tambah</button>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url(''); ?>">Beranda</a></div>
                <div class="breadcrumb-item"><a href="">Master Data</a></div>
                <div class="breadcrumb-item">Pemilih</div>
            </div>
        </div>

        <h2 class="section-title">Hi, <?php echo $this->session->userdata('nama') ?> - <?php if ($this->session->userdata('id_role') == "1") { ?> Admin <?php } else { ?>Panitia <?php } ?>!</h2>
        <p class="section-lead">
            Tambahkan Pemilih Manual / Pemilih Register Sendiri Juga Sama Saja Kok!
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pemilih</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Nomor Pemilih (NIK)</th>
                                        <th>Nama</th>
                                        <th>Telpon</th>
                                        <th>Status Memilih</th>
                                        <th>Status Verifikasi</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>33020612446065</td>
                                        <td>Vebri Yusdi Putra Pradana</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-success">Sudah Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-success">Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>4651561684111</td>
                                        <td>David Wahid</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-success">Sudah Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-success">Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>9848945151864615</td>
                                        <td>Reyhan Burhan</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-danger">Belum Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-danger">Tidak Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>5498815616454515</td>
                                        <td>OM Arif</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-danger">Belum Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-success">Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>8499848915651</td>
                                        <td>OM Kanz</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-danger">Belum Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-danger">Tidak Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>12326576854635</td>
                                        <td>Putra Pradana</td>
                                        <td>0896XXXX</td>
                                        <td>
                                            <div class="badge badge-success">Sudah Memilih</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-success">Terverifikasi</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>


<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
<script type="text/javascript">
    $("#table-1").dataTable({
        "columnDefs": [{
            "sortable": false,
            "targets": [2, 3]
        }]
    });


    $(document).ready(function() {
        <?= $this->session->flashdata('simpan-data'); ?>

        function simpan_data() {
            iziToast.success({
                title: 'Tersimpan!',
                message: 'User Baru Telah Di Tambahkan',
                position: 'topRight'
            });
        }
    });

    $(document).ready(function() {
        <?= $this->session->flashdata('edit-data'); ?>

        function edit_data() {
            iziToast.success({
                title: 'Tersimpan!',
                message: 'Data User Telah Di Perbaruhi',
                position: 'topRight'
            });
        }
    });

    $(document).ready(function() {
        <?= $this->session->flashdata('hapus-data'); ?>

        function hapus_data() {
            iziToast.warning({
                title: 'Berhasil!',
                message: 'Data User Telah Di Hapus',
                position: 'topRight'
            });
        }
    });

    $(document).ready(function() {
        <?= $this->session->flashdata('ubah-password'); ?>

        function ubah_password() {
            iziToast.info({
                title: 'Berhasil!',
                message: 'Password User Telah Di Perbarui',
                position: 'topRight'
            });
        }
    });

    $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "Pilih File", // Default: Choose File
        label_selected: "Uabh File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });
</script>
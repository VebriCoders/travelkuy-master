<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Destination</h1>
            <div class="section-header-button">
                <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambah-data"><i class="far fa-edit"></i> Tambah</button>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url(''); ?>">Beranda</a></div>
                <div class="breadcrumb-item"><a href="">Master Data</a></div>
                <div class="breadcrumb-item">List Destination</div>
            </div>
        </div>

        <h2 class="section-title">Hi, <?php echo $this->session->userdata('nama') ?> - <?php if ($this->session->userdata('id_role') == "1") { ?> Admin <?php } else { ?>Panitia <?php } ?>!</h2>
        <p class="section-lead">
            Add Destination For Your Tour & Travel !.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Destination</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Foto Utama</th>
                                        <th>Destinasi</th>
                                        <th>Deskripsi</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($viewDestination->result() as $data) { ?>
                                        <tr>
                                            <td width="10px">
                                                <?php echo $i ?>
                                            </td>
                                            <td width="100px">
                                                <img alt="image" src="<?php echo base_url('assets/') ?>upload/foto_destinasi/<?php echo $data->photo ?>" class="rounded-circle" width="100" height="100px" data-toggle="tooltip" title="<?php echo $data->nama_destinasi ?>">
                                            </td>
                                            <td width="100px"><?php echo $data->nama_destinasi ?></td>
                                            <td width="500px">
                                                <?php echo substr($data->deskripsi_destinasi, 0, 250) . "...." ?>
                                            </td>
                                            <td width="180px">
                                                <a href="<?php echo base_url('destination/gallery/' . $data->slug_url) ?>" class="btn btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="Tambahkan Foto Destinasi Di Sini"><i class="fas fa-images"></i></a>
                                                <a href="<?php echo base_url('destination/detail/' . $data->slug_url) ?>" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" title="Lihat Detail Destinasi"><i class="fas fa-list-alt"></i></a>
                                                <button class="btn btn-icon  btn-warning" data-toggle="modal" data-target="#edit-data<?php echo $data->id ?>" title="Edit"><i class="ion-edit"></i> </button>
                                                <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#hapus-data<?php echo $data->id ?>" title="Hapus"><i class="ion-trash-a"></i> </button>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Hapus Data -->
<?php foreach ($viewDestination->result() as $data) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus-data<?php echo $data->id ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Destinasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Inggin Menghapus Data Destinasi (<?php echo $data->nama_destinasi ?>) ?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <a class="btn btn-danger" href="<?php echo base_url('destination/hapus/' . $data->id) ?>">Hapus</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal Hapus Data -->

<!-- Modal Edit Data -->
<?php
$i = 1;
foreach ($viewDestination->result() as $data) { ?>
    <?php echo form_open_multipart('destination/edit'); ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-data<?php echo $data->id ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Destinasi (<?php echo $data->nama_destinasi ?>)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" value="<?php echo $data->id ?>" required="" name="code_query">
                <div class="modal-body">
                    <div class="form-group col-md-12 col-12">
                        <label>Nama Destinasi</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php echo $data->nama_destinasi ?>" required="" placeholder="Masukkan Nama Destinasi" name="nama_destinasi">
                        </div>
                        <div class="invalid-feedback">
                            Nama Destinasi
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-12">
                        <label>Deskripsi Destinasi</label>
                        <div class="input-group">
                            <textarea class="form-control summernote-simple" name="deskripsi_destinasi" required=""><?php echo $data->deskripsi_destinasi ?></textarea>
                        </div>
                        <div class="invalid-feedback">
                            Deskripsi Destinasi
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-12">
                        <label>Foto Utama Destinasi (Banner)</label>
                        <div class="input-group">
                            <div id="image-preview<?php echo $i ?>" class="image-preview">
                                <label for="image-upload" id="image-label<?php echo $i ?>">Ubah Foto</label>
                                <input type="file" name="photo" id="image-upload<?php echo $i ?>" value="<?php echo $data->photo ?>" />
                                <input type="hidden" name="old_image" value="<?php echo $data->photo ?>" />
                            </div>
                        </div>
                        <p>File Saat ini : <?php echo $data->photo ?> </p>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>

    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script>
        $.uploadPreview({
            input_field: "#image-upload<?php echo $i ?>", // Default: .image-upload
            preview_box: "#image-preview<?php echo $i ?>", // Default: .image-preview
            label_field: "#image-label<?php echo $i ?>", // Default: .image-label
            label_default: "Pilih File", // Default: Choose File
            label_selected: "Uabh File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>

<?php $i++;
} ?>
<!-- End Edit Data -->


<!-- Modal Tambah Data -->
<?php echo form_open_multipart('destination/add'); ?>
<div class="modal fade" tabindex="-1" role="dialog" id="tambah-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Destinasi Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-md-12 col-12">
                    <label>Nama Destinasi</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="" required="" placeholder="Masukkan Nama Destinasi" name="nama_destinasi">
                    </div>
                    <div class="invalid-feedback">
                        Nama Destinasi
                    </div>
                </div>
                <div class="form-group col-md-12 col-12">
                    <label>Deskripsi Destinasi</label>
                    <div class="input-group">
                        <textarea class="form-control summernote-simple" name="deskripsi_destinasi" required=""></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Deskripsi Destinasi
                    </div>
                </div>
                <div class="form-group col-md-12 col-12">
                    <label>Foto Utama Destinasi (Banner)</label>
                    <div class="input-group">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Pilih File</label>
                            <input type="file" name="photo" id="image-upload" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<!-- End Tambah Data -->


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
                message: 'Destinasi Baru Telah Di Tambahkan',
                position: 'topRight'
            });
        }
    });

    $(document).ready(function() {
        <?= $this->session->flashdata('edit-data'); ?>

        function edit_data() {
            iziToast.success({
                title: 'Tersimpan!',
                message: 'Data Destinasi Telah Di Perbaruhi',
                position: 'topRight'
            });
        }
    });

    $(document).ready(function() {
        <?= $this->session->flashdata('hapus-data'); ?>

        function hapus_data() {
            iziToast.warning({
                title: 'Berhasil!',
                message: 'Data Destinasi Telah Di Hapus',
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
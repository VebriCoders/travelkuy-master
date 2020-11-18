<div class="main-content">
    <section class="section">

        <?php foreach ($viewDestination->result() as $data) { ?>
            <div class="section-header">
                <div class="section-header-button">
                    <a href="<?php echo base_url('destination') ?>" class="btn btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="Kembali Ke List Destination"><i class="fas fa-angle-double-left"></i></a>
                </div>
                &nbsp
                <h1>Gallery Destination (<?php echo $data->nama_destinasi ?>)</h1>
                <div class="section-header-button">
                    <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambah-data"><i class="far fa-edit"></i> Tambah</button>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo base_url(''); ?>">Beranda</a></div>
                    <div class="breadcrumb-item"><a href="">Master Data</a></div>
                    <div class="breadcrumb-item"><a href="">Destination</a></div>
                    <div class="breadcrumb-item">Gallery Destination</div>
                </div>
            </div>
        <?php } ?>

        <h2 class="section-title">Hi, <?php echo $this->session->userdata('nama') ?> - <?php if ($this->session->userdata('id_role') == "1") { ?> Admin <?php } else { ?>Panitia <?php } ?>!</h2>
        <p class="section-lead">
            Add Photo Gallery Destination For Your Tour & Travel !.
        </p>

        <div class="row">
            <?php foreach ($viewGallery->result() as $data) { ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="<?php echo base_url('assets/') ?>upload/foto_destinasi/gallery/<?php echo $data->photo ?>">
                            </div>
                            <div class="article-title">
                                <h2><a><?php echo $data->title ?></a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <div class="article-cta">
                                <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#hapus-data<?php echo $data->id ?>" title="Hapus"><i class="ion-trash-a"></i> </button>
                            </div>
                        </div>
                    </article>
                </div>
            <?php } ?>

        </div>
    </section>
</div>

<!-- Modal Hapus Data -->
<?php foreach ($viewGallery->result() as $data) { ?>
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
                    <p>Apakah Anda Inggin Menghapus Foto Ini?</p>
                </div>
                <?php foreach ($viewDestination->result() as $data_slug) { ?>
                    <?php $slug_data = $data_slug->slug_url ?>
                <?php } ?>

                <div class="modal-footer bg-whitesmoke br">
                    <a class="btn btn-danger" href="<?php echo base_url('destination/hapus_gallery/' . $slug_data . '/' . $data->id) ?>">Hapus</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal Hapus Data -->


<!-- Modal Tambah Data -->
<?php foreach ($viewDestination->result() as $data) { ?>
    <?php echo form_open_multipart('destination/add_gallery/' . $data->slug_url); ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="tambah-data">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Foto Gallery Destinasi Baru (<?php echo $data->nama_destinasi ?>)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="text" name="id_destinasi" value="<?php echo $data->id ?>">
                <input type="text" name="nama_destinasi" value="<?php echo $data->nama_destinasi ?>">
                <div class="modal-body">
                    <div class="form-group col-md-12 col-12">
                        <label>Nama Foto</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="" required="" placeholder="Masukkan Nama Foro" name="title">
                        </div>
                        <div class="invalid-feedback">
                            Nama Foto
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-12">
                        <label>Foto</label>
                        <div class="input-group">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Pilih File</label>
                                <input type="file" name="photo" id="image-upload" required />
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

    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script type="text/javascript">
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

<?php } ?>
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
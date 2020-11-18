<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_pemilih/header_pemilih');
?>

<!-- Main Content -->
<?php $this->load->view($namamodule . '/' . $namafileview); ?>
<!-- End Main Content -->

<?php $this->load->view('_pemilih/footer_pemilih'); ?>
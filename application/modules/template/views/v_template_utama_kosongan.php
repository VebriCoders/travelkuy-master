<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header_admin');
?>

<!-- Main Content -->
<?php $this->load->view($namamodule . '/' . $namafileview); ?>
<!-- End Main Content -->

<?php $this->load->view('_partials/footer_admin'); ?>
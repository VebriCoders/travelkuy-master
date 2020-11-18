<!-- Head -->
<?php $this->load->view('_view_komponen/head'); ?>

<!-- Navbar & Loader -->
<?php $this->load->view('_view_komponen/navbar_load'); ?>


<!-- Main Content -->
<?php $this->load->view($namamodule . '/' . $namafileview); ?>
<!-- End Main Content -->


<br>
<section>
    <div class="qa-travel">
        <div class="container qa-travel__center">
            <div class="col-lg-8 qa-travel__question">

                <h6> <a class="qa-travel__question__text" href="#"> Have Some Question About</a><span> Travel & Tour </span>?</h6>
                <a class="qa-travel__question__btn" href="https://api.whatsapp.com/send?phone=<?= $website['phone'] ?>&text=Saya%20ingin%20bertanya%20tentang%20tour%20and%20travel%20anda." target="_blank">let’s talk</a>

            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php $this->load->view('_view_komponen/footer'); ?>

<!-- JS -->
<?php $this->load->view('_view_komponen/js'); ?>
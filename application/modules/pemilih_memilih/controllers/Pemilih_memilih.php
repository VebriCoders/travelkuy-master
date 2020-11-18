<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih_memilih extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pemilih_memilih');

        // $this->check_login();
        // if ($this->session->userdata('id_role') != "1" && $this->session->userdata('id_role') != "2") {
        //     redirect('', 'refresh');
        // }
    }

    public function index()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'namamodule'     => "pemilih_memilih",
            'namafileview'     => "v_pemilih_memilih",
            'menu'      => "Pemilih Memilih",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            // 'tampilData' => $this->M_Setting->tampilData(),
        );
        echo Modules::run('template/TemplatePemilih', $data);
    }

    public function buka_surat()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'namamodule'     => "pemilih_memilih",
            'namafileview'     => "v_buka_surat",
            'menu'      => "Pemilih Memilih",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            // 'tampilData' => $this->M_Setting->tampilData(),
        );
        echo Modules::run('template/TemplatePemilih', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih_auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pemilih_auth');

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
            'namamodule'     => "pemilih_auth",
            'namafileview'     => "v_pemilih_auth",
            'menu'      => "Login",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            // 'tampilData' => $this->M_Setting->tampilData(),
        );
        $this->load->view('v_pemilih_login', $data);
    }

    public function lupa_nomor()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'namamodule'     => "pemilih_auth",
            'namafileview'     => "v_pemilih_auth",
            'menu'      => "Lupa Nomor Pemilihan",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            // 'tampilData' => $this->M_Setting->tampilData(),
        );
        $this->load->view('v_pemilih_lupa_nomor', $data);
    }

    public function register_pemilih()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'namamodule'     => "pemilih_auth",
            'namafileview'     => "v_pemilih_auth",
            'menu'      => "Pendaftaran",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            // 'tampilData' => $this->M_Setting->tampilData(),
        );
        $this->load->view('v_pemilih_register', $data);
    }
}

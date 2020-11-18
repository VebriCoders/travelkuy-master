<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Gallery');

        $this->check_login();
        if ($this->session->userdata('id_role') != "1" && $this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();

        // LOAD LIBRARY
        $this->load->library('pagination');

        $web_link = base_url();

        // CONFIG
        $config['base_url'] = $web_link . '/gallery/index';
        $config['total_rows'] = $this->M_Gallery->hitungSemua_data();
        $config['per_page'] = 4;

        // INTIALIZE
        $this->pagination->initialize($config);

        // URI SEGMENT
        $start = $this->uri->segment(3);

        $data = array(
            'namamodule'     => "gallery",
            'namafileview'     => "v_gallery",
            'menu'      => "Gallery",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'viewGallery' => $this->M_Gallery->viewGallery($config['per_page'], $start),
        );
        echo Modules::run('template/TemplateAdmin_Utama', $data);
    }

    function add()
    {
        $this->M_Gallery->Tambah_Data();
        $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('gallery');
    }

    function hapus($code)
    {
        $this->M_Gallery->Hapus_Data($code);
        $this->session->set_flashdata('hapus-data', 'hapus_data();');

        redirect('gallery');
    }
}

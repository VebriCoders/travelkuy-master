<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tour extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tour');
        $this->load->model('M_Gallery_Tour');

        $this->check_login();
        if ($this->session->userdata('id_role') != "1" && $this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'namamodule'     => "tour",
            'namafileview'     => "v_tour",
            'menu'      => "List Tour & Travel",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'viewTour' => $this->M_Tour->tampilDataTour(),
            'joinDestinasi' => $this->M_Tour->joinDestinasi(),
        );
        echo Modules::run('template/TemplateAdmin_Utama', $data);
    }

    function add()
    {
        $this->M_Tour->Tambah_Data();
        $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('tour');
    }

    function edit()
    {
        $this->M_Tour->Edit_Data();
        $this->session->set_flashdata('edit-data', 'edit_data();');

        redirect('tour');
    }

    function hapus($code)
    {
        $this->M_Tour->Hapus_Data($code);
        $this->session->set_flashdata('hapus-data', 'hapus_data();');

        redirect('tour');
    }

    public function gallery($slug_url_tour)
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data_tour = $this->M_Gallery_Tour->tampilDataTourById($slug_url_tour);

        $data = array(
            'namamodule'     => "tour",
            'namafileview'     => "v_gallery",
            'menu'      => "Gallery Tour & Travel",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'viewTour' => $this->M_Gallery_Tour->tampilDataTour($data_tour->id),
            'joinDestinasi' => $this->M_Tour->joinDestinasi(),
            'viewGallery' => $this->M_Gallery_Tour->tampilFotoGaleri($data_tour->id),
        );
        echo Modules::run('template/TemplateAdmin_Utama', $data);
    }

    function add_gallery($slug_url)
    {
        $this->M_Gallery_Tour->Tambah_Data();
        $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('tour/gallery/' . $slug_url);
    }

    function hapus_gallery($slug_url, $code)
    {
        $this->M_Gallery_Tour->Hapus_Data($code);
        $this->session->set_flashdata('hapus-data', 'hapus_data();');

        redirect('tour/gallery/' . $slug_url);
    }
}

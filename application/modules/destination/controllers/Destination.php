<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Destination');
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
        $data = array(
            'namamodule'     => "destination",
            'namafileview'     => "v_destination",
            'menu'      => "List Destination",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'viewDestination' => $this->M_Destination->tampilData(),
        );
        echo Modules::run('template/TemplateAdmin_Utama', $data);
    }

    function add()
    {
        $this->M_Destination->Tambah_Data();
        $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('destination');
    }

    function edit()
    {
        $this->M_Destination->Edit_Data();
        $this->session->set_flashdata('edit-data', 'edit_data();');

        redirect('destination');
    }

    function hapus($code)
    {
        $this->M_Destination->Hapus_Data($code);
        $this->session->set_flashdata('hapus-data', 'hapus_data();');

        redirect('destination');
    }

    public function gallery($destinasi)
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $destinasi_data = $this->M_Gallery->getDestinasiId($destinasi);

        $data = array(
            'namamodule'     => "destination",
            'namafileview'     => "v_gallery",
            'menu'      => "Gallery Destination",
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'viewDestination' => $this->M_Gallery->tampilDataDiGallry($destinasi),
            'viewGallery' => $this->M_Gallery->tampilFotoGaleri($destinasi_data->id),
        );
        echo Modules::run('template/TemplateAdmin_Utama', $data);
    }

    function add_gallery($slug_url)
    {
        $this->M_Gallery->Tambah_Data();
        $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('destination/gallery/' . $slug_url);
    }

    function hapus_gallery($slug_url, $code)
    {
        $this->M_Gallery->Hapus_Data($code);
        $this->session->set_flashdata('hapus-data', 'hapus_data();');

        redirect('destination/gallery/' . $slug_url);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Home');

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
            'namamodule'     => "home",
            'namafileview'     => "v_travel_home",
            'menu'      => "Home - " . $website['nama_website'],
            'homeactive_halaman' => 1,
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'tampilDataTour_Home' => $this->M_Home->tampilDataTour_Home(),
            'tampilDataDestinasi_Home' => $this->M_Home->tampilDataDestinasi_Home(),
            'tampilDataGallery_Home' => $this->M_Home->tampilDataGallery_Home(),
        );
        echo Modules::run('template/TemplateTravel', $data);
    }
}

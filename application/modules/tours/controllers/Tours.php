<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tours extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tours');

        // $this->check_login();
        // if ($this->session->userdata('id_role') != "1" && $this->session->userdata('id_role') != "2") {
        //     redirect('', 'refresh');
        // }
    }

    public function index()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();

        // LOAD LIBRARY
        $this->load->library('pagination');

        $web_link = base_url();

        // CONFIG
        $config['base_url'] = $web_link . '/tours/index';
        $config['total_rows'] = $this->M_Tours->hitungSemua_data();
        $config['per_page'] = 9;

        // INTIALIZE
        $this->pagination->initialize($config);

        // URI SEGMENT
        $start = $this->uri->segment(3);

        $data = array(
            'namamodule'     => "tours",
            'namafileview'     => "v_travel_travel",
            'menu'      => "Tours & Travel List - " . $website['nama_website'],
            'homeactive_halaman' => 0,
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'tampilDataTour_Home' => $this->M_Tours->tampilDataTour_Home($config['per_page'], $start),
            'tampilDataDestinasi_Home' => $this->M_Tours->tampilDataDestinasi_Home(),
            'tampilDataGallery_Home' => $this->M_Tours->tampilDataGallery_Home(),
            'jml_data_travel' => $this->M_Tours->hitungSemua_data(),
        );
        echo Modules::run('template/TemplateTravel', $data);
    }

    public function search()
    {
        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();

        // LOAD LIBRARY
        $this->load->library('pagination');

        $web_link = base_url();

        // CONFIG
        $config['base_url'] = $web_link . '/tours/search/index';
        $config['total_rows'] = $this->M_Tours->hitungSemua_data_search();
        $config['per_page'] = 24;

        // INTIALIZE
        $this->pagination->initialize($config);

        // URI SEGMENT
        $start = $this->uri->segment(3);

        $data = array(
            'namamodule'     => "tours",
            'namafileview'     => "v_travel_travel",
            'menu'      => "Tours & Travel List - " . $website['nama_website'],
            'homeactive_halaman' => 0,
            //variable
            'website' => $website,
            'user_aktif' => $user_aktif,
            'tampilDataTour_Home' => $this->M_Tours->tampilDataTour_Home_search($config['per_page'], $start),
            'tampilDataDestinasi_Home' => $this->M_Tours->tampilDataDestinasi_Home(),
            'tampilDataGallery_Home' => $this->M_Tours->tampilDataGallery_Home(),
            'jml_data_travel' => $this->M_Tours->hitungSemua_data_search(),
        );
        echo Modules::run('template/TemplateTravel', $data);
    }
}

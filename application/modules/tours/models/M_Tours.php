<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Tours extends CI_Model
{
    function tampilDataTour_Home($limit, $start)
    {
        return $this->db->select('tbl_tour_travel.*,tbl_destinasi.nama_destinasi as nmdesti')->join('tbl_destinasi', 'tbl_tour_travel.id_destinasi = tbl_destinasi.id')->order_by('tbl_tour_travel.id', 'DESC')->get('tbl_tour_travel', $limit, $start)->result_array();
    }

    function tampilDataTour_Home_search($limit, $start)
    {
        $cari_tours   = $this->input->post('cari_tours');
        return $this->db->select('tbl_tour_travel.*,tbl_destinasi.nama_destinasi as nmdesti')->join('tbl_destinasi', 'tbl_tour_travel.id_destinasi = tbl_destinasi.id')->like('tbl_tour_travel.nama_tour_travel', $cari_tours)->order_by('tbl_tour_travel.id', 'DESC')->get('tbl_tour_travel', $limit, $start)->result_array();
    }

    function hitungSemua_data()
    {
        return $this->db->get('tbl_tour_travel')->num_rows();
    }

    function hitungSemua_data_search()
    {
        $cari_tours   = $this->input->post('cari_tours');
        return $this->db->like('tbl_tour_travel.nama_tour_travel', $cari_tours)->get('tbl_tour_travel')->num_rows();
    }

    function tampilDataDestinasi_Home()
    {
        $this->db->select('tbl_destinasi.*,')
            ->from('tbl_destinasi')
            ->limit(8)
            ->order_by('tbl_destinasi.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function tampilDataGallery_Home()
    {
        $this->db->select('tbl_gallery_travel.*,')
            ->from('tbl_gallery_travel')
            ->order_by('tbl_gallery_travel.id', 'DESC'); //ASC
        return $this->db->get();
    }
}

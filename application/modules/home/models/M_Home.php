<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Home extends CI_Model
{
    function tampilDataTour_Home()
    {
        $this->db->select('tbl_tour_travel.*,tbl_destinasi.nama_destinasi as nmdesti')
            ->from('tbl_tour_travel')
            ->join('tbl_destinasi', 'tbl_tour_travel.id_destinasi = tbl_destinasi.id')
            ->limit(8)
            ->order_by('tbl_tour_travel.id', 'DESC'); //ASC
        return $this->db->get();
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

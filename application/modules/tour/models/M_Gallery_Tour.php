<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Gallery_Tour extends CI_Model
{
    private $_table = 'tbl_tour_travel';
    private $_table_gallery = 'tbl_tour_travel_gallery';

    public function tampilDataTourById($slug_url_tour)
    {
        return $this->db->get_where($this->_table, ["slug_url" => $slug_url_tour])->row();
    }

    function tampilFotoGaleri($id)
    {
        $this->db->select('tbl_tour_travel_gallery.*,')
            ->from('tbl_tour_travel_gallery')
            ->where('tbl_tour_travel_gallery.id_tour_travel', $id)
            ->order_by('tbl_tour_travel_gallery.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function tampilDataTour($id)
    {
        $this->db->select('tbl_tour_travel.*,')
            ->from('tbl_tour_travel')
            ->where('tbl_tour_travel.id', $id)
            ->order_by('tbl_tour_travel.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function Tambah_Data()
    {
        date_default_timezone_set("Asia/Bangkok");

        $data = array(
            'id' => uniqid(),
            'id_tour_travel'    => $this->input->post('id_tour_travel'),
            'title'    => $this->input->post('title'),
            'photo' => $this->_uploadImage(),
            'created_on' => date('Y-m-d  H:i:s'),
        );

        $this->db->insert($this->_table_gallery, $data);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/upload/foto_tour/gallery/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['file_name']            = "Gallery-" . $this->input->post('nama_tour_travel') . "_" . time();
        $config['overwrite']            = true;
        $config['max_size']             = 5024; // 5MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {

            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    function Hapus_Data($code)
    {
        $this->_deleteImage($code);
        $this->db->where('id', $code)->delete($this->_table_gallery);
    }

    public function getById($code)
    {
        return $this->db->get_where($this->_table_gallery, ["id" => $code])->row();
    }

    private function _deleteImage($code)
    {
        $data = $this->getById($code);

        if ($data->photo != "default.jpg") {
            $filename = explode(".", $data->photo)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/foto_tour/gallery/$filename.*"));
        }
    }
}

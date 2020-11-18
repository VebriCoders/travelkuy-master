<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Tour extends CI_Model
{
    private $_table = 'tbl_tour_travel';

    function tampilDataTour()
    {
        $this->db->select('tbl_tour_travel.*,tbl_destinasi.nama_destinasi as nmdesti')
            ->from('tbl_tour_travel')
            ->join('tbl_destinasi', 'tbl_tour_travel.id_destinasi = tbl_destinasi.id')
            ->order_by('tbl_tour_travel.id', 'DESC'); //ASC
        return $this->db->get();
    }

    public function getById($code)
    {
        return $this->db->get_where($this->_table, ["id" => $code])->row();
    }

    function joinDestinasi()
    {
        $this->db->select('*')
            ->from('tbl_destinasi');
        $query = $this->db->get();
        return $query;
    }

    function Tambah_Data()
    {
        date_default_timezone_set("Asia/Bangkok");

        $nama_slug = trim(strtolower($this->input->post('nama_tour_travel')));
        $out = explode(" ", $nama_slug);
        $slug = implode("-", $out);

        $data = array(
            'id' => uniqid(),
            'id_destinasi'    => $this->input->post('id_destinasi'),
            'slug_url' => $slug,
            'nama_tour_travel'    => $this->input->post('nama_tour_travel'),
            'deskripsi_tour_travel'    => $this->input->post('deskripsi_tour_travel'),
            'fasilitas_tour_travel'    => $this->input->post('fasilitas_tour_travel'),
            'keberangkatan_tour_travel'    => $this->input->post('keberangkatan_tour_travel'),
            'waktu_tour_travel'    => $this->input->post('waktu_tour_travel'),
            'harga_tour_travel'    => $this->input->post('harga_tour_travel'),
            'photo' => $this->_uploadImage(),
            'created_on' => date('Y-m-d  H:i:s'),
        );

        $this->db->insert($this->_table, $data);
    }

    function Edit_Data()
    {
        date_default_timezone_set("Asia/Bangkok");

        $nama_slug = trim(strtolower($this->input->post('nama_tour_travel')));
        $out = explode(" ", $nama_slug);
        $slug = implode("-", $out);

        if (!empty($_FILES["photo"]["name"])) {
            $data = array(
                'id_destinasi'    => $this->input->post('id_destinasi'),
                'slug_url' => $slug,
                'nama_tour_travel'    => $this->input->post('nama_tour_travel'),
                'deskripsi_tour_travel'    => $this->input->post('deskripsi_tour_travel'),
                'fasilitas_tour_travel'    => $this->input->post('fasilitas_tour_travel'),
                'keberangkatan_tour_travel'    => $this->input->post('keberangkatan_tour_travel'),
                'waktu_tour_travel'    => $this->input->post('waktu_tour_travel'),
                'harga_tour_travel'    => $this->input->post('harga_tour_travel'),
                'photo' => $this->_uploadImage(),
                'edited_on' => date('Y-m-d  H:i:s'),
            );
        } else {
            $data = array(
                'id_destinasi'    => $this->input->post('id_destinasi'),
                'slug_url' => $slug,
                'nama_tour_travel'    => $this->input->post('nama_tour_travel'),
                'deskripsi_tour_travel'    => $this->input->post('deskripsi_tour_travel'),
                'fasilitas_tour_travel'    => $this->input->post('fasilitas_tour_travel'),
                'keberangkatan_tour_travel'    => $this->input->post('keberangkatan_tour_travel'),
                'waktu_tour_travel'    => $this->input->post('waktu_tour_travel'),
                'harga_tour_travel'    => $this->input->post('harga_tour_travel'),
                'photo'    => $this->input->post('old_image'),
                'edited_on' => date('Y-m-d  H:i:s'),
            );
        }

        $this->db->where('id', $this->input->post('code_query'))->update($this->_table, $data);
    }

    function Hapus_Data($code)
    {
        $this->_deleteImage($code);
        $this->db->where('id', $code)->delete($this->_table);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/upload/foto_tour/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['file_name']            = $this->input->post('nama_tour_travel') . "_" . time();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {

            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($code)
    {
        $data = $this->getById($code);
        if ($data->photo != "default.jpg") {
            $filename = explode(".", $data->photo)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/foto_tour/$filename.*"));
        }
    }
}

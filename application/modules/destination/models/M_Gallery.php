<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Gallery extends CI_Model
{
    private $_table = 'tbl_destinasi';
    private $_table_gallery = 'tbl_destinasi_gallery';

    public function getDestinasiId($destinasi)
    {
        return $this->db->get_where($this->_table, ["slug_url" => $destinasi])->row();
    }

    function tampilFotoGaleri($id)
    {
        $this->db->select('tbl_destinasi_gallery.*,')
            ->from('tbl_destinasi_gallery')
            ->where('tbl_destinasi_gallery.id_destinasi', $id)
            ->order_by('tbl_destinasi_gallery.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function tampilDataDiGallry($destinasi)
    {
        $this->db->select('tbl_destinasi.*,')
            ->from('tbl_destinasi')
            ->where('tbl_destinasi.slug_url', $destinasi)
            ->order_by('tbl_destinasi.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function Tambah_Data()
    {
        date_default_timezone_set("Asia/Bangkok");

        $data = array(
            'id' => uniqid(),
            'id_destinasi'    => $this->input->post('id_destinasi'),
            'title'    => $this->input->post('title'),
            'photo' => $this->_uploadImage(),
            'created_on' => date('Y-m-d  H:i:s'),
        );

        $this->db->insert($this->_table_gallery, $data);
    }

    function Hapus_Data($code)
    {
        $this->_deleteImage($code);
        $this->db->where('id', $code)->delete($this->_table_gallery);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/upload/foto_destinasi/gallery/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['file_name']            = "Gallery-" . $this->input->post('nama_destinasi') . "_" . time();
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

    public function getById($code)
    {
        return $this->db->get_where($this->_table_gallery, ["id" => $code])->row();
    }

    private function _deleteImage($code)
    {
        $data = $this->getById($code);

        if ($data->photo != "default.jpg") {
            $filename = explode(".", $data->photo)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/foto_destinasi/gallery/$filename.*"));
        }
    }
}

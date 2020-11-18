<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
class M_Gallery extends CI_Model
{
    private $_table = 'tbl_gallery_travel';

    function viewGallery($limit, $start)
    {
        return $this->db->order_by('tbl_gallery_travel.id', 'DESC')->get('tbl_gallery_travel', $limit, $start)->result_array();
    }

    function hitungSemua_data()
    {
        return $this->db->get('tbl_gallery_travel')->num_rows();
    }

    function Tambah_Data()
    {
        date_default_timezone_set("Asia/Bangkok");

        $data = array(
            'id' => uniqid(),
            'title'    => $this->input->post('title'),
            'photo' => $this->_uploadImage(),
            'created_on' => date('Y-m-d  H:i:s'),
        );

        $this->db->insert($this->_table, $data);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/upload/foto_gallery_travel/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['file_name']            = $this->input->post('title') . "_" . time();
        $config['overwrite']            = true;
        $config['max_size']             = 10240; // 10MB
        $config['quality']              = '50%';
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {

            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/upload/foto_gallery_travel/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '50%';
            $config['width'] = 1920;
            $config['height'] = 800;
            $config['new_image'] = 'assets/upload/foto_gallery_travel/resize/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    function Hapus_Data($code)
    {
        $this->_deleteImage($code);
        $this->db->where('id', $code)->delete($this->_table);
    }

    public function getById($code)
    {
        return $this->db->get_where($this->_table, ["id" => $code])->row();
    }


    private function _deleteImage($code)
    {
        $data = $this->getById($code);

        if ($data->photo != "default.jpg") {
            $filename = explode(".", $data->photo)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/foto_gallery_travel/$filename.*"));
        }
    }
}

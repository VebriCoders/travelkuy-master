<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_Auth');
    }

    public function check_account()
    {
        //validasi login
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        //ambil data dari database untuk validasi login
        $query = $this->M_Auth->check_account($email, $password);

        if ($query === 1) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Email yang Anda masukkan tidak terdaftar.</div>
        			</div>
        			</p>
            ');
        } elseif ($query === 2) {
            $this->session->set_flashdata(
                'alert',
                '<p class="box-msg">
                    <div class="info-box alert-info">
                    <div class="info-box-icon">
                    <i class="fa fa-info-circle"></i>
                    </div>
                    <div class="info-box-content" style="font-size:14">
                    <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
                    </div>
                    </p>'
            );
        } elseif ($query === 3) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Password yang Anda masukkan salah.</div>
        			</div>
        			</p>
              ');
        } else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
            $userdata = array(
                'is_login'    => true,
                'id'          => $query->id,
                'password'    => $query->password,
                'id_role'     => $query->id_role,
                'slug'        => $query->slug,
                'nama'        => $query->nama,
                'email'       => $query->email,
                'phone'       => $query->phone,
                'photo'       => $query->photo,
                'created_on'  => $query->created_on,
                'last_login'  => $query->last_login
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }

    public function login()
    {
        // Identitas Halaman Melalui Setting
        // $site = $this->Konfigurasi_model->listing();
        // $data = array(
        //     'title'     => 'Login | '.$site['nama_website'],
        //     'favicon'   => $site['favicon'],
        //     'site'      => $site
        // );

        $website = $this->M_Setting->set_setting();
        $user_aktif = $this->M_Profile->tampil_user_aktif();
        $data = array(
            'title'     => 'Admin Login | ' . $website['nama_website'],
            'website' => $website,
            'user_aktif' => $user_aktif,
        );

        //melakukan pengalihan halaman sesuai dengan levelnya
        if ($this->session->userdata('id_role') == "1") {
            redirect('beranda');
        }
        // if ($this->session->userdata('id_role') == "2") {
        //     redirect('beranda');
        // }
        // if ($this->session->userdata('id_role') == "3") {
        //     redirect('beranda');
        // }

        //proses login dan validasi nya
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[22]');
            $error = $this->check_account();

            if ($this->form_validation->run() && $error === true) {
                $data = $this->M_Auth->check_account($this->input->post('email'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->id_role == '1') {
                    //Update Last Login
                    date_default_timezone_set("Asia/Bangkok");
                    $id = $this->session->userdata('id');
                    $data = [
                        'last_login' => date('Y-m-d  H:i:s'),
                    ];
                    $this->db->where('id', $id)->update('tbl_user', $data);
                    $this->session->set_flashdata('selamat-datang', 'selamat_datang();');
                    redirect('beranda');
                } elseif ($data->id_role == '2') {
                    //Update Last Login
                    date_default_timezone_set("Asia/Bangkok");
                    $id = $this->session->userdata('id');
                    $data = [
                        'last_login' => date('Y-m-d  H:i:s'),
                    ];
                    $this->db->where('id', $id)->update('tbl_user', $data);
                    redirect('beranda');
                } elseif ($data->id_role == '3') {
                    //Update Last Login
                    date_default_timezone_set("Asia/Bangkok");
                    $id = $this->session->userdata('id');
                    $data = [
                        'last_login' => date('Y-m-d  H:i:s'),
                    ];
                    $this->db->where('id', $id)->update('tbl_user', $data);
                    redirect('beranda');
                }
            } else {
                $this->load->view('v_login', $data);
            }
        } else {
            $this->load->view('v_login', $data);
        }
    }

    public function logout()
    {
        date_default_timezone_set("Asia/Bangkok");
        $id = $this->session->userdata('id');
        // echo "string ".$id;
        $data = [
            'last_logout' => date('Y-m-d  H:i:s'),
        ];
        // $this->db->update('tbl_user', $data);
        $this->db->where('id', $id)->update('tbl_user', $data);

        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register()
    {
        $this->load->view('v_register');
    }
}

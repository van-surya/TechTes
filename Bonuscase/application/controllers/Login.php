<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
    }

    public function index()
    {

        $inputan = $this->input->post();
        if ($inputan) {
            $login = $this->Muser->login($inputan);
            if ($login == "sukses") {
                $this->session->set_flashdata('pesan', 'Selamat Datang');
                redirect('instansi', 'refresh');
            } elseif ($login == "gagal") {
                $this->session->set_flashdata('pesan', 'Login Gagal, Cek Username dan Password Anda');
                redirect('', 'refresh');
            } else {
                $this->session->set_flashdata('pesan', 'Login Gagal, Cek Username dan Password Anda');
                redirect('', 'refresh');
            }
        }
        $this->session->sess_destroy();
        $data = ['title' => 'Login'];
        $this->load->view('login', $data);
    }
}

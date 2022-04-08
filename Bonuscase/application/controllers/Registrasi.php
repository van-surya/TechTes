<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Muser');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $inputan = $this->input->post();

        if ($this->form_validation->run() == TRUE) {

            $this->Muser->simpan_user($inputan);

            $this->session->set_flashdata('pesan', 'Berhasil registrasi harap login!');
            redirect('registrasi', 'refresh');
        }
        // selain itu gagal  
        else {
            $data['gagal'] = validation_errors();
        }

        $data['title'] = 'Registrasi';
        $this->load->view('registrasi', $data);
    }
}

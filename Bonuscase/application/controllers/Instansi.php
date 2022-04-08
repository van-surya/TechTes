<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Instansi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Minstansi');
        $this->load->model('Muser');
        if (!$this->session->userdata("user")) {
            $this->session->set_flashdata('pesan', 'Anda harus login');
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Instansi';
        $data['instansi'] = $this->Minstansi->tampil_instansi();
        $this->load->view('header', $data);
        $this->load->view('instansi/datainstansi', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_instansi', 'Instansi', 'required|is_unique[instansi.nama_instansi]|max_length[30]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        $inputan = $this->input->post();

        if ($this->form_validation->run() == TRUE) {
            $this->Minstansi->simpan_instansi($inputan);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah!');
            redirect('instansi', 'refresh');
        } else {
            $data['gagal'] = validation_errors();
        }

        $data['title'] = 'Tambah Instansi';
        $this->load->view('header', $data);
        $this->load->view('instansi/tambahinstansi', $data);
        $this->load->view('footer');
    }

    public function detail($id_instansi)
    {
        $data['datainstansi'] = $this->Minstansi->detail_instansi($id_instansi);

        $data['title'] = 'Detail Instansi';
        $this->load->view('header', $data);
        $this->load->view('instansi/detailinstansi', $data);
        $this->load->view('footer');
    }

    public function ubah($id_instansi)
    {
        $inputan = $this->input->post();
        if ($inputan) {
            $detail = $this->Minstansi->detail_instansi($id_instansi);
            if ($inputan['nama_instansi'] == $detail['nama_instansi']) {
                $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required|max_length[30]');
            } else {
                $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required|is_unique[instansi.nama_instansi]');
            }
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

            if ($this->form_validation->run() == TRUE) {

                $this->Minstansi->ubah_instansi($inputan, $id_instansi);
                $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
                redirect('instansi', 'refresh');
            }
            $data['gagal'] = validation_errors();
        }

        $data["datainstansi"] = $this->Minstansi->detail_instansi($id_instansi);

        $data['title'] = 'Ubah Instansi';
        $this->load->view('header', $data);
        $this->load->view('instansi/editinstansi', $data);
        $this->load->view('footer');
    }
    public function hapus($id_instansi)
    {
        $this->Minstansi->hapus_instansi($id_instansi);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('instansi', 'refresh');
    }
}

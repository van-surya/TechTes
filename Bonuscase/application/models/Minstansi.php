 <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Minstansi extends CI_Model
    {

        function tampil_instansi()
        {
            $ambil = $this->db->get('instansi');
            return $ambil->result_array();
        }

        function simpan_instansi($inputan)
        {
            $nama_instansi = $inputan['nama_instansi'];
            $this->db->where('nama_instansi', $nama_instansi);

            $instansi = $this->db->get('instansi')->row_array();
            if (empty($instansi)) {
                $this->db->insert('instansi', $inputan);
                return 'sukses';
            } else {
                return 'gagal';
            }
        }

        function detail_instansi($id_instansi)
        {
            $this->db->where('id_instansi', $id_instansi);
            $ambil = $this->db->get('instansi');
            return $ambil->row_array();
        }


        function ubah_instansi($inputan, $id_instansi)
        {
            $this->db->where('nama_instansi', $inputan['nama_instansi']);
            $this->db->where('deskripsi', $inputan['deskripsi']);

            $instansi = $this->db->get('instansi')->row_array();
            if (empty($instansi)) {
                $this->db->where('id_instansi', $id_instansi);
                $this->db->update('instansi', $inputan);
                return 'sukses';
            } else {
                return 'gagal';
            }
        }

        function hapus_instansi($id_instansi)
        {
            $this->db->where('id_instansi', $id_instansi);
            $this->db->delete('instansi');
        }
    }

 <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Muser extends CI_Model
    {

        public function login($inputan)
        {
            $username = $inputan['username'];
            $password = $inputan['password'];
            $password = sha1($password);

            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $ambil = $this->db->get('user');

            $user = $ambil->row_array();

            if (empty($user)) {
                return "gagal";
            } else {
                $this->session->set_userdata("user", $user);
                return "sukses";
            }
        }

        function simpan_user($inputan)
        {
            $pass_inputan = $inputan['password'];
            $pass_enkrip = sha1($pass_inputan);
            $inputan['password'] = $pass_enkrip;

            $this->db->insert('user', $inputan);
        }
    }

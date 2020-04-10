<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $data['title']  = 'LOGIN';

      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false) {
         $this->load->view('auth/login', $data);
      } else {
         redirect('menu/data_pegawai');
      }
   }

   public function registrasi()
   {
      // supaya kalau sudah login gak bisa masuk ke auth dari url
      // if ($this->session->userdata('email')) {
      //    redirect('akun');
      // }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[pegawai.username]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules('password1', 'Konfirmasi Password', 'trim|required|matches[password]');

      if ($this->form_validation->run() == false) {
         $data['title']  = 'Register';
         $this->load->view('auth/register', $data);
      } else {
         // set data apa saja yang akan di insert dari hasil register
         $data = [
            // penambahan true untuk menghindari SSS
            'foto'      => 'avatar.jpg',
            'nama'      => htmlspecialchars($this->input->post('nama', true)),
            'username'  => htmlspecialchars($this->input->post('username', true)),
            'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'level_id'  => 1,
            'aktif'     => 1,
            'tgl_masuk' => time() // tanggal saat data register disimpan
         ];

         $this->db->insert('pegawai', $data);
         $this->session->set_flashdata('success', 'Pegawai berhasil ditambahkan.');
         redirect('kasir');
      }
   }

   public function logout() // #################################################################
   {
      // menentukan data session apa saja yang akan dihapus (sesuai field data di tabel user)
      $sess_data = ['id', 'name', 'email', 'role', 'is_login'];
      // proses hapus session login yang sudah tersimpan dalam $sess_data
      $this->session->unset_userdata('$sess_data');
      $this->session->sess_destroy(); // menghapus semua session - bisa tanpa $sess_data
      redirect(base_url());
   }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
   public function index()
   {
      if (!$_POST) {
         $input  = (object) $this->register->getDefaultValues();
      } else {
         $input  = (object) $this->input->post(null, true);
      }

      if (!$this->register->validate()) {
         $data['title']  = 'DAFTAR BARU';
         $this->load->view('pages/auth/register', $data);
         return;
      }

      if ($this->register->run($input)) {
         $this->session->set_flashdata('success', 'Nama pegawai telah ditambahkan.');
         redirect(base_url());
      } else {
         $this->session->set_flashdata('error', 'Ooops! Terjadi kesalahan!');
         redirect(base_url('register'));
      }
   }
}

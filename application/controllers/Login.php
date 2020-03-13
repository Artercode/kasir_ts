<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
   public function index()
   {
      if (!$_POST) {
         $input = (object) $this->login->getDefaultValues();
      } else {
         $input = (object) $this->input->post(null, true);
      }
      // jika validasi gagal
      if (!$this->login->validate()) {
         $data['title']  = 'LOGIN';

         $this->load->view('pages/auth/login', $data);
         return;
      }
      // jika validasi berhasil - alert untuk prosess login berhasil maka.. jika gagal..
      if ($this->login->run($input)) {
         $this->session->set_flashdata('success', 'Login berhasil dilakukan.');
         redirect(base_url());
      } else {
         $this->session->set_flashdata('error', 'Email atau password salah atau akun anda tidak aktif!');
         redirect(base_url('login'));
      }
   }
}

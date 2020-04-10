<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function data_pegawai()
   {
      $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();
      $data['title']    = 'Data Pegawai';
      $data['pegawai']  = $pegawai;
      $data['page']     = 'menu/data_pegawai';
      $this->view($data);
   }
}

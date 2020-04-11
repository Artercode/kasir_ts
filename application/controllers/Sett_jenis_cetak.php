<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sett_jenis_cetak extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      if (!$_POST) {
         $input = (object) $this->sett_jenis_cetak->getValuesJenisCetak(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $pegawai = $this->db->get_where('pegawai', ['username' => $this->session->userdata('username')])->row_array();
      $cetak = $this->db->get('data_jenis_cetak')->result();

      $data['title']    = 'Jenis Cetak';
      $data['pegawai']  = $pegawai;
      $data['cetak']    = $cetak;
      $data['input']    = $input;
      $data['page']     = 'setting/sett_jenis_cetak';

      return $this->view($data);
   }
}

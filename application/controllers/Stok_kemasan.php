<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_kemasan extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      // logged();
      $this->load->library('form_validation');
   }

   public function index()
   {
      if (!$_POST) {
         $input = (object) $this->stok_kemasan->getValuesStokKemasan(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $grosir = $this->db->get('data_kemasan_grosir')->result();
      $eceran = $this->db->get('data_kemasan_eceran')->result();
      $satuan = $this->db->get('data_kemasan_satuan')->result();

      $data['title']       = 'Macam Kemasan';
      $data['grosir']      = $grosir;
      $data['eceran']      = $eceran;
      $data['satuan']      = $satuan;
      $data['input']       = $input;
      $data['page']        = 'stok/kemasan';

      return $this->view($data);
   }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kemasan extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   // #################### kemasan ###########################################################
   public function index($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->kemasan->getValuesKemasan(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();

      $data['title']       = 'Kemasan';
      $data['pegawai']     = $pegawai;
      $data['input']       = $input;
      $data['form_action'] = base_url('kemasan/tambah_kemasan');
      $data['content']    = $this->kemasan->paginate($page)->get();
      $data['total_rows'] = $this->kemasan->count(); // total baris dalam tabel stok_kemasan
      $data['pagination'] = $this->kemasan->makePagination(
         base_url('stok/kemasan'),
         3, // mengarahkan ke halaman pagination yang ada di url)
         $data['total_rows']
      );
      $data['page']        = 'stok/kemasan';
      return $this->view($data);
   }
}

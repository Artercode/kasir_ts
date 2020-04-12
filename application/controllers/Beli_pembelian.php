<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beli_pembelian extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->beli_pembelian->getValuesBeliPembelian(); // pembelian_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Pembelian';
      $data['input']       = $input;
      $data['form_action'] = base_url('stok/tambah_kategori');
      $data['content']     = $this->beli_pembelian->paginate($page)->get();
      $data['total_rows']  = $this->beli_pembelian->count(); // total data dalam tabel sto_kategori
      // 3 parameter untuk membuat pagination 
      $data['pagination']  = $this->beli_pembelian->makePagination(
         base_url('beli_pembelian'),
         3, // mengarahkan ke halaman pagination yang ada di url)
         $data['total_rows']
      );
      $data['page']        = 'beli/pembelian';
      return $this->view($data);
   }
}

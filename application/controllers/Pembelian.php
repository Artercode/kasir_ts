<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function nota_pembelian($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->pembelian->getDefaultValues(); // pembelian_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();

      $data['title']       = 'Kategori';
      $data['pegawai']     = $pegawai;
      $data['input']       = $input;
      $data['form_action'] = base_url('stok/tambah_kategori');
      $data['content']     = $this->pembelian->paginate($page)->get();
      $data['total_rows']  = $this->pembelian->count(); // total data dalam tabel sto_kategori
      // 3 parameter untuk membuat pagination 
      $data['pagination']  = $this->pembelian->makePagination(
         base_url('nota/nota_pembelian'),
         3, // mengarahkan ke halaman pagination yang ada di url)
         $data['total_rows']
      );
      $data['page']        = 'nota/nota_pembelian';
      return $this->view($data);
   }
}

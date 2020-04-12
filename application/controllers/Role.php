<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->role->getValuesRole(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Role Menu';
      $data['input']       = $input;
      $data['content']     = $this->role->paginate($page)->get();
      $data['total_rows']  = $this->role->count(); // total baris data
      $data['pagination']  = $this->role->makePagination(
         base_url('role'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'role/role';

      return $this->view($data);
   }

   public function akses($page = null)
   {
      // if (!$_POST) {
      //    $input = (object) $this->role->getValuesAkses(); // stok_model
      // } else {
      //    $input = (object) $this->input->post(null, true);
      // }

      $data['title']       = 'Role Menu';
      // $data['input']       = $input;
      $data['form_action']    = base_url('role/tambah_role');
      $data['content']     = $this->role->paginate($page)->get();
      $data['total_rows']  = $this->role->count(); // total baris data
      $data['pagination']  = $this->role->makePagination(
         base_url('role'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'role/role';

      return $this->view($data);
   }


   public function Tambah_akses()
   {
      if (!$_POST) {
         $input = (object) $this->role_akses->getValuesAkses();
      } else {
         $input = (object) $this->input->post(null, true);
      }

      if (!$this->role_akses->validate()) {
         $data['title']          = 'Tambah Produk';
         $data['input']          = $input;
         $data['form_action']    = base_url('role/tambah_akses');
         $data['page']           = 'role/role';

         $this->view($data);
         return;
      }

      if ($this->role_akses->create($input)) {
         $this->session->set_flashdata('success', 'Data berhasil disimpan!');
      } else {
         $this->session->set_flashdata('error', 'Ooops! Terjadi suatu kesalahan');
      }
      redirect(base_url('product'));
   }
}

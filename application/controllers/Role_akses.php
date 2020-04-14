<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_akses extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      // logged();
      $this->load->library('form_validation');
   }

   public function index($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->role_akses->getValuesRoleAkses(); // _model.php
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Role Akses';
      $data['input']       = $input;
      $data['content']     = $this->role_akses->paginate($page)->get();
      $data['total_rows']  = $this->role_akses->count(); // total baris data
      $data['pagination']  = $this->role_akses->makePagination(
         base_url('role_akses'), // posisi uri - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'role/akses';

      return $this->view($data);
   }
}

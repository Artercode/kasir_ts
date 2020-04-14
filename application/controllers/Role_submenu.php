<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_submenu extends MY_Controller
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
         $input = (object) $this->role_submenu->getValuesRoleSubmenu(); // _model.php
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Submenu';
      $data['input']       = $input;
      $data['content']     = $this->role_submenu->paginate($page)->get();
      $data['total_rows']  = $this->role_submenu->count(); // total baris data
      $data['pagination']  = $this->role_submenu->makePagination(
         base_url('role_submenu'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'role/submenu';

      return $this->view($data);
   }
}

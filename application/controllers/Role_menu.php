<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_menu extends MY_Controller
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
         $input = (object) $this->role_menu->getValuesRoleMenu(); // _model.php
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Menu';
      $data['input']       = $input;
      $data['content']     = $this->role_menu->paginate($page)->get();
      $data['total_rows']  = $this->role_menu->count(); // total baris data
      $data['pagination']  = $this->role_menu->makePagination(
         base_url('role_menu'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'role/menu';

      return $this->view($data);
   }
}

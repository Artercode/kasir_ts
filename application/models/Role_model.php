<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends MY_Model
{
   public $table = 'role';

   public function getValuesRole()
   {
      return [
         'role_id'   => '',
         'role'      => ''
      ];
   }

   public function getValuesAkses()
   {
      return [
         'role_id'      => '',
         'menu_id'      => '',
         'submenu_id'   => '',
         'aktif'        => ''
      ];
   }
}

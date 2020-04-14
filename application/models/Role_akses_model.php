<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_akses_model extends MY_Model
{
   public $table = 'role_akses';
   protected $perPage = 100;   // menimpa $perPage yang ada di [9]MY_Model.php
   public function getValuesRoleAkses()
   {
      return [
         'id'           => '',
         'role_id'      => '',
         'menu_id'      => '',
         'submenu_id'   => '',
         'Info'         => '',
         'aktif'        => ''
      ];
   }
}

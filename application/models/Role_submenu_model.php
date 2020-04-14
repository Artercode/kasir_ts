<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_submenu_model extends MY_Model
{
   public $table = 'role_submenu';
   protected $perPage = 100;   // menimpa $perPage yang ada di [9]MY_Model.php
   public function getValuesRoleSubmenu()
   {
      return [
         'menu_id'   => '',
         'submenu'   => '',
         'url'       => '',
         'icon'      => ''
      ];
   }
}

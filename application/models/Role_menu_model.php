<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_menu_model extends MY_Model
{
   public $table = 'role_menu';
   protected $perPage = 100;   // menimpa $perPage yang ada di [9]MY_Model.php
   public function getValuesRoleMenu()
   {
      return [
         'menu_id'  => '',
         'menu'      => ''
      ];
   }
}

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
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kemasan_model extends MY_Model
{
   public $table = 'stok_kemasan';

   // #################### kemasan ###########################################################
   public function getValuesKemasan()
   {
      return [
         'id'              => '',
         'kategori'        => '',
         'item'            => '',
         'kemasan_grosir'  => '',
         'kemasan_eceran'  => '',
         'kemasan_satuan'  => ''
      ];
   }

   public function getValidationRules()
   {
      $validationRules = [
         [
            'field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'trim|required'
         ],
         [
            'field' => 'kemasan_grosir',
            'label' => 'Kemanan Grosir',
            'rules' => 'trim|required'
         ],
      ];
      return $validationRules;
   }
}

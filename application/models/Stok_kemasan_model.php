<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_kemasan_model extends MY_Model
{
   public $table = 'stok_kemasan';

   public function getValuesStokKemasan()
   {
      return [
         'id_kemasan_grosir'  => '',
         'kemasan_grosir'     => '',
         'id_kemasan_eceran'  => '',
         'kemasan_eceran'     => '',
         'id_kemasan_satuan'  => '',
         'kemasan_satuan'     => ''
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

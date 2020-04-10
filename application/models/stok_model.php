<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_model extends MY_Model
{
   public $table = 'stok_kategori';

   public function getValuesKategori()
   {
      return [
         'id'        => '',
         'kategori'  => '',
         'slug'      => ''
      ];
   }
   // menentukan syarat validasi rulenya
   public function getValidationRules()
   {
      $validationRules = [
         [
            'field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'trim|required'
         ],
         [
            'field' => 'slug',
            'label' => 'Slug',
            'rules' => 'trim|required|callback_unique_slug'
         ],
      ];
      return $validationRules;
   }
}

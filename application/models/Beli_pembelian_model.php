<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beli_pembelian_model extends MY_Model
{
   public $table = 'beli_pembelian';

   public function getValuesBeliPembelian()
   {
      return [
         'id'              => '',
         'jml'             => '',
         'item'            => '',
         'isi_grosir'      => '',
         'harga_grosir'    => '',
         'harga_eceran'    => ''
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

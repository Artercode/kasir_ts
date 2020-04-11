<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_harga_jual_model extends MY_Model
{
   public $table = 'jual_harga_jual';

   public function getValuesHargaJual()
   {
      return [
         'image'        => '',
         'barcode'      => '',
         'item'         => '',
         'isi_grosir'   => '',
         'harga_grosir' => '',
         'isi_eceran'   => '',
         'harga_eceran' => '',
         'isi_satuan'   => '',
         'harga_satuan' => ''
      ];
   }
}

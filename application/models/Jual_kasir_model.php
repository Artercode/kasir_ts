<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_kasir_model extends MY_Model
{
   public $table = 'penjualan';

   public function getValuesKasir()
   {
      return [
         'jml'       => '',
         'item'      => '',
         'harga'     => '',
         'subtotal'  => ''
      ];
   }
}

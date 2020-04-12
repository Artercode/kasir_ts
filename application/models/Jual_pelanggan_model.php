<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_pelanggan_model extends MY_Model
{
   public $table = 'jual_pelanggan';

   public function getValuesJualPelanggan()
   {
      return [
         'nama'      => '',
         'alamat'    => '',
         'kelurahan' => '',
         'kota'      => '',
         'phone'     => ''
      ];
   }
}

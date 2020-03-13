<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ceo extends MY_Controller
{
   public function index()
   {
      $data['title']  = 'CEO';
      $data['page']   = 'ceo/index';

      return $this->view($data);
   }
}

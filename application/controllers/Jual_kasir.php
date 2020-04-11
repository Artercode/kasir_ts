<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_kasir extends MY_Controller
{
    public function index()
    {

        $data['title']      = 'KASIR';
        $data['page']       = 'jual/index';

        return $this->view($data);
    }
}

/* End of file Controllername.php */

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends MY_Controller
{
    public function index()
    {
        $data['title']  = 'KASIR';
        $data['page']   = 'kasir/index';

        return $this->view($data);
    }
}

/* End of file Controllername.php */

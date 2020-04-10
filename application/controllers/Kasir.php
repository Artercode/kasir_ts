<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends MY_Controller
{
    public function index()
    {
        $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();
        $data['title']      = 'KASIR';
        $data['pegawai']    = $pegawai;
        $data['page']       = 'kasir/index';

        return $this->view($data);
    }
}

/* End of file Controllername.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_kasir extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		// logged();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if (!$_POST) {
			$input = (object) $this->jual_kasir->getValuesKasir(); // stok_model
		} else {
			$input = (object) $this->input->post(null, true);
		}

		$data['title']      = 'KASIR';
		$data['input']       = $input;
		$data['page']       = 'jual/index';

		return $this->view($data);
	}
}

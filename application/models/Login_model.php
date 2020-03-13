<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends MY_Model
{
	// menentukan tabel yang digunakan karena nama model tidak sama dengan nama tabel
	protected $table = 'user';

	public function getDefaultValues()
	{
		return [
			'username'  => '',
			'password'  => '',
		];
	}

	// fungsi input validasi
	public function validate()
	{
		// $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters(
			'<small class="form-text text-danger">',
			'</small>'
		);
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		return $this->form_validation->run();
	}

	public function run($input)
	{
		// mencari email apa sudah terdaftar atau belum
		$query = $this->where('username', strtolower($input->username))
			->where('is_active', 1)
			->first();
		// jika email ada dalam database
		if (!empty($query) && password_verify($input->password, $query->password)) {
			$sess_data = [
				'id'        => $query->id,
				'username'  => $query->username,
				'name'      => $query->name,
				'role'      => $query->role,
				'is_login'  => true,
			];
			$this->session->set_userdata($sess_data);
			return true;
		}
		return false;
	}
}

/* End of file Login_model.php */

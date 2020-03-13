<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Register_model merupakan turunan dari MY_Model
class Register_model extends MY_Model
{
	protected $table = 'user';

	public function getDefaultValues()
	{
		return [
			'name'      => '',
			'address'   => '',
			'username'  => '',
			'password'  => '',
			'foto'      => '',
			'role'      => '',
			'ia_active' => ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'trim|required',
			],
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required|is_unique[user.username]',
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[4]',
			],
			[
				'field' => 'password1',
				'label' => 'Ulang Password',
				'rules' => 'required|matches[password]',
			],
		];
		return $validationRules;
	}

	public function run($input)
	{
		$data = [
			'name'      => htmlspecialchars($input->name, true),
			'username'  => htmlspecialchars($input->username, true),
			'password'  => password_hash($input->password, PASSWORD_DEFAULT),
			'role'      => '1',
			'is_active' => '1',
			'date_created'	=> time()
		];

		$user       = $this->create($data);
		$sess_data  = [
			'id'        => $user,
			'name'      => $data['name'],
			'username'  => $data['username'],
			'foto'      => $data['foto'],
			'role'      => '1',
			'is_login'  => true
		];

		$this->session->set_userdata($sess_data);
		return true;
	}
}

/* End of file Register_model.php */

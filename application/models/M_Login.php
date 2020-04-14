<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_Model {

	// Start
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$row = $this->db->get('cms_user');
		if ($row->num_rows() > 0) {
			$field = $row->row_array();
			$array = array(
				'login' => true,
				'name' => $field['name'],
				'username' => $field['username'],
				'level' => $field['level']
			);
			$this->session->set_userdata($array);
			return true;
		}else
			return false;
	}

	// End
}

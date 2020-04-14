<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');

	}
	// Index
	public function index()
	{	
			if (@$_SESSION['login'] == true) {
			redirect('dashboard','refresh');
			}else{
				$this->load->view('login/index');	
			}
	}
	// End index


	// Login
	public function login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//$check = $this->M_Login->login($username,$password);
			$u = $username;
            $p = md5($password);
            $check = $this->M_Login->login($u, $p);
			if ($check) {
				$json = array('stat' => true );
			} else {
				$json = array('stat' => false );
			}
				echo json_encode($json);
	}
	// End login


	// Logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('control2019','refresh');
	}
	// End Logout

}

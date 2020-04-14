<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Dashboard');
		$this->load->model('transaction/M_player');
		if (@$_SESSION['login'] == false) {
			redirect('logout','refresh');
		}
	}

	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		
		if (@$_SESSION['login'] == true) {
    		$data['title'] = "Dashboard";
			
			$data['total_user'] 	= $this->M_player->getAllData()->result();
			$data['total_device'] 	= $this->M_player->getDevice()->result();
			$get_survey				= $this->M_player->getSurvey()->result();

			for($i=0;$i<count($get_survey);$i++) {
				$data['grafik_survey'][$i]		= ($get_survey[$i]->survey);
				$data['grafik_total'][$i]		= ((int)$get_survey[$i]->total);
			}

			$this->load->view('template/navbar',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('template/header',$data);
			$this->load->view('pages/dashboard/index',$data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('login/index');
		}
	}
}

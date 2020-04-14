<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ResultController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaction/M_player');
        if (@$_SESSION['login'] == false) {
            redirect('logout', 'refresh');
        }
    }

    public function index()
    {
        if (@$_SESSION['login'] == true) {

            $data['title']  = "Result";
            $data['result'] = $this->M_player->getdata()->result();
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/header', $data);
            $this->load->view('pages/result/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->view('login/index');
        }
    }
    
    public function laporan(){
        $date_start = date("Y-m-d H:i:s", strtotime($this->input->post("date_start")));
        $date_end   = date("Y-m-d H:i:s", strtotime($this->input->post("date_end")));
        
        $data['title']  = "Result";
        $data['result'] = $this->M_player->cariplayer($date_start, $date_end)->result();
        
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/header', $data);
        $this->load->view('pages/result/index', $data);
        $this->load->view('template/footer');
            
   }

}

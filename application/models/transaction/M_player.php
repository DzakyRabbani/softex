<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_player extends MY_Model{
	
	protected $tableName= "ttr_player";
    public $primaryKey = "player_id";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
	
	function getDevice() {
		$query		= $this->db->query("SELECT DISTINCT device_number FROM $this->tableName");
		
		return $query;
	}

	function getSurvey() {
		$query		= $this->db->select("survey, COUNT(*) AS total")
								->from($this->tableName)
								->group_by("survey")
								->get();
		
		return $query;
	}
	
	public function getdata()
	{
		return $this->db->query("SELECT * FROM $this->tableName ORDER BY submit_time ASC");
    }	
	
	
	function cariplayer($date_start, $date_end) {
		$data = $this->db->query("SELECT * FROM $this->tableName WHERE submit_time 
								BETWEEN '$date_start' AND '$date_end' ORDER BY submit_time ASC");
		return $data;
	}
}
?>
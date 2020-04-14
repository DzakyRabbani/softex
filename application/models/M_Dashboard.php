<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getCount($table)
	{
		return $this->db->get($table);
	}	
		
	public function getLastDate()
	{
		$this->db->select('created_at');
		$this->db->from('tu_user');
		$this->db->order_by('created_at', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function getLastPLay()
	{
		$this->db->select('created_at');
		$this->db->from('ttr_mypoint');
		$this->db->order_by('created_at', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function getCountDaily($table)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now =  date('d');
		
		if ($table == "history_game") {
			return $this->db->query("SELECT COUNT(DISTINCT player_id) FROM history_game where ket = 'GAME' AND DATE(history_game.play_date) = CURDATE() GROUP BY player_id");
		} else {
			return $this->db->query("SELECT COUNT(*) as total FROM $table WHERE DATE(player.registered_date) = CURDATE() AND email_status = 1");
		}	
	}	
	
	public function getHistoryDaily($table)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now =  date('d');
		
		if ($table == "history_game") {
			return $this->db->query("SELECT COUNT(*) as total FROM history_game where ket = 'GAME' 
									AND date(history_game.play_date) = CURDATE()");
		} else {
			return $this->db->query("SELECT COUNT(*) as total FROM $table WHERE date(player.registered_date) = $now");
		}	
	}
	
	public function getGrafikPlayer() {
		return $this->db->query("SELECT date(created_at) as date , count(user_id) as total FROM `tu_user` GROUP BY DATE(created_at)")->result();
	}
	
	public function getGrafikDailyActiveUser() {
		return $this->db->query("SELECT DATE(created_at) AS date, COUNT(DISTINCT user_id) AS total FROM ttr_mypoint GROUP BY DATE(created_at)")->result();
												
		/* return $this->db->query("SELECT DATE(play_date) AS date, COUNT(player_id) AS total
												FROM history_game WHERE ket = 'GAME' GROUP BY DATE(play_date)"); */
	}
	
	public function getGrafikPlayHistory() {
		return $this->db->query("SELECT DATE(created_at) AS date, COUNT(user_id) AS total FROM ttr_mypoint GROUP BY DATE(created_at)")->result();
												
		/* return $this->db->query("SELECT DATE(play_date) AS date, COUNT(player_id) AS total
												FROM history_game WHERE ket = 'GAME' GROUP BY DATE(play_date)"); */
	}
	
	/* public function getGrafikPlayHistory() {
		return $this->db->query("SELECT DATE(play_date) AS date, COUNT(player_id) AS total
												FROM history_game WHERE ket = 'GAME' GROUP BY DATE(play_date)");
	} */

}

/* End of file M_Dashboard.php */
/* Location: ./application/models/M_Dashboard.php */
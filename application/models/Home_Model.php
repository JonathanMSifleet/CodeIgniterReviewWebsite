<?php

class Home_Model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getGame($gameName) {
		$query = null;

		// if no game is searched for load all games otherwise search by game name
		if ($gameName != "") {
			$query = $this->db->query("SELECT * FROM activereviews WHERE GameName LIKE '%$gameName%' ORDER BY GameName ASC");
		} else {
			$query = $this->db->query("SELECT * FROM activereviews ORDER BY ID ASC");
		}

		// return results to controller
		return $query->result();

	}
}

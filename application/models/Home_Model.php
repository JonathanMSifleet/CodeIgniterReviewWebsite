<?php

class Home_Model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getGame($gameName) {
		$query=null;

		if ($gameName != "") {
			$query = $this->db->query("SELECT * FROM activereviews WHERE GameName LIKE '%$gameName%'");
		} else {
			$query = $this->db->query("SELECT * FROM activereviews");
		}

		return $query->result();

	}

	//Get the details for a game once it has been clicked on.
	public function getReview($slug = FALSE) {

	}
}

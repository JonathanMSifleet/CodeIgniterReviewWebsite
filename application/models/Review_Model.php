<?php

class Review_Model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function getReviewData($slug) {
		// get slug:

		$query = $this->db->query("SELECT DISTINCT * FROM activereviews WHERE slug = '$slug' LIMIT 1");
		return $query->result();

	}

}

?>

<?php

class ViewReview extends CI_Model
{

	public function __construct() {

		$this->load->database();

	}

	public function GetReviewData($slug) {
		// get slug:

		$query = $this->db->query("SELECT DISTINCT * FROM activereviews WHERE slug = '$slug' LIMIT 1");
		return $query->result();

	}

}

?>

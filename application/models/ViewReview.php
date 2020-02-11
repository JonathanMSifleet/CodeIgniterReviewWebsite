<?php

class ViewReview extends CI_Model
{

	public function __construct() {

		$this->load->database();

	}

	public function GetMovieData() {
		// get slug:
		$data = $this->uri->uri_to_assoc();
		$slug = $data['game'];

		$query = $this->db->query("SELECT GameName, GameBlurb, GameReview, slug, ReviewImage FROM activereviews WHERE slug = $slug");
		return $query->result();

	}

}

?>

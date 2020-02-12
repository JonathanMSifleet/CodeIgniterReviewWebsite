<?php

class ViewReview extends CI_Model
{

	public function __construct() {

		$this->load->database();

	}

	public function GetMovieData() {
		// get slug:

		$slug = basename();

		$query = $this->db->query("SELECT GameName, GameBlurb, GameReview, slug, ReviewImage FROM activereviews WHERE slug = '$slug'");
		return $query->result();

	}

}

?>

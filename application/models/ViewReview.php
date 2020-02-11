<?php

class ViewReview extends CI_Model
{

	public function __construct() {

		$this->load->database();

	}

	public function get_movie_data() {
		// get slug:
		$data = $this->uri->uri_to_assoc();
		$slug = $data['game'];

		// create statement:
		$this->db->select('GameName, GameBlurb, GameReview, slug, ReviewImage');
		$this->db->from('activereviews');
		$this->db->where('slug', $slug);

		// run statement:
		$query = $this->db->get();

		// get result:
		return $query->result();

	}

}

?>

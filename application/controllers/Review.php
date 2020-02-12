<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review extends CI_Controller
{
	public function __construct() {

		parent::__construct();
		$this->load->model('ViewReview');

	}

	public function index() {
		$reviewData['MovieData'] = $this->ViewReview->GetReviewData();
		$this->load->view('review', $reviewData);
	}

	public function getReviewTitle() {
		$row = $this->db->query('SELECT title AS answerid FROM pa_it_answer')->row();
		if ($row) {
			$MAXID = $row->answerid;
		}

	}
}

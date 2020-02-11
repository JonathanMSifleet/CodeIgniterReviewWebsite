<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review extends CI_Controller
{
	public function __construct() {

		parent::__construct();
		$this->load->model('ViewReview');

	}

	public function index() {
		$reviewData['MovieData'] = $this->ViewReview->GetMovieData();
		$this->load->view('review', $reviewData);
	}
}

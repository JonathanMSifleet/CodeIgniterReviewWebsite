<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review extends CI_Controller
{
	public function __construct() {

		parent::__construct();
        $this->load->helper('url');
		$this->load->model('ViewReview');
	}

	public function index() {
	}

	public function review($slug) {

        $reviewData['MovieData'] = $this->ViewReview->GetReviewData($slug);
        $this->load->view('review', $reviewData);
    }
}

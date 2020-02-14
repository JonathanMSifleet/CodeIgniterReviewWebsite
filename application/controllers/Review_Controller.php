<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review_Controller extends CI_Controller
{
	public function __construct() {

		parent::__construct();
        $this->load->helper('url');
		$this->load->model('Review_Model');
	}

	public function review($slug) {

        $reviewData['MovieData'] = $this->Review_Model->GetReviewData($slug);
        $this->load->view('review', $reviewData);
    }
}

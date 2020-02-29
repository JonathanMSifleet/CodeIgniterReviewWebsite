<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review_Controller extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Review_Model');
	}

	public function review($slug) {

		$reviewData['gameReview'] = $this->Review_Model->getReviewData($slug);

		$this->load->view('review', $reviewData);
	}

	public function postComment() {
		$postData = array(
			'username' => $this->input->post('username'),
			'comment' => $this->input->post('commentInput'),
			'reviewID' => $this->input->post('reviewID'),
			'timeStamp' => $this->input->post('timeStamp')
		);

		$previousLink = $this->input->post('currentURL');
		$previousLink = substr($previousLink, 13, strlen($previousLink));

		$this->Review_Model->attemptPostComment($postData);

		redirect($previousLink);

	}

	public function getComments() {

		$comments = $this->Review_Model->getComments($_SESSION['reviewID']);

		echo json_encode($comments);

	}

}

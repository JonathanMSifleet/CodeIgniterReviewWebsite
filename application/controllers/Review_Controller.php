<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review_Controller extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Review_Model');
	}

	public function review($slug) {
		// get review data  from based upon slug
		$data['gameReview'] = $this->Review_Model->getReviewData($slug);

		$data['bodyContent'] = 'review';
		$data['page'] = 'review';
		$this->load->view('template', $data);
	}

	public function postComment() {
		// get post data
		$postData = array(
			'username' => $this->input->post('username'),
			'comment' => $this->input->post('commentInput'),
			'reviewID' => $this->input->post('reviewID'),
			'timeStamp' => $this->input->post('timeStamp')
		);

		// store previous URL
		$previousLink = $this->input->post('currentURL');
		$previousLink = substr($previousLink, 13, strlen($previousLink));

		// send comment data to review model
		$this->Review_Model->attemptPostComment($postData);

		// redirect to last URL
		redirect($previousLink);

	}

	public function getComments() {
		// fetch comments from review model
		$comments = $this->Review_Model->getComments($_SESSION['reviewID']);

		// echo comments encoded as JSON
		echo json_encode($comments);

	}

}

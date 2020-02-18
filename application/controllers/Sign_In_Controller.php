<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_In_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Sign_In_Model');
	}

	public function loadSignInView() {
		$this->load->view('sign_in');
	}

	public function attemptSignIn() {
		$postData = array(
			'username' => $this->input->post('usernameInput'),
			'password' => $this->input->post('passwordInput')
		);

		$loginAttempt = $this->Sign_In_Model->attemptSignIn($postData);

		$data = array();

		if (empty($loginAttempt)) {
			$data['loginSuccessful'] = false;
		} else {
			$data['loginSuccessful'] = true;
		}

		$this->load->view('sign_in', $data);

	}

}

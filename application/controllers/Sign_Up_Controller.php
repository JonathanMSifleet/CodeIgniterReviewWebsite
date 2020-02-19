<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_Up_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				redirect(base_url());
			}
		} else {
			$this->load->model('Sign_Up_Model');
		}

	}

	public function loadSignUpView() {
		$this->load->view('sign_up');
	}

	public function attemptSignUp() {
		$postData = array(
			'username' => $this->input->post('usernameInput'),
			'password' => $this->input->post('passwordInput')
		);

		$accountExists = $this->Sign_Up_Model->attemptSignUp($postData);

		if (empty($accountExists)) {
			$this->Sign_Up_Model->createAccount($postData);
			redirect(base_url());
		} else {
			$data['accountExists'] = true;
			$this->load->view('sign_up', $data);
		}

	}

}

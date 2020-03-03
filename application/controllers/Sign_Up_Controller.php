<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_Up_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		// if the use is logged in redirect to home page
		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				redirect(base_url());
			}
		} else {
			//otherwise load model
			$this->load->model('Sign_Up_Model');
		}

	}

	public function loadSignUpView() {
		//load sign up view
		$data['bodyContent'] = 'sign_up';
		$data['page'] = 'sign_up';
		$this->load->view('template', $data);
	}

	public function attemptSignUp() {
		// get data from sign up form
		$postData = array(
			'username' => $this->input->post('usernameInput'),
			'password' => $this->input->post('passwordInput')
		);

		// check if account exists
		$accountExists = $this->Sign_Up_Model->attemptSignUp($postData);

		// if no account exists encrypt password
		if (empty($accountExists)) {
			$postData['password'] = $this->encryptInput($postData['password']);
			// insert new account into database
			$this->Sign_Up_Model->createAccount($postData);
			// redirect to sign in page
			redirect("SignIn");
		} else {
			$data['accountExists'] = true;

			// if account exists load sign up view with appropriate message
			$data['page'] = 'sign_up';
			$data['bodyContent'] = 'sign_up';
			$this->load->view('template', $data);
		}

	}

	// returns hashed input
	private function encryptInput($input) {
		return password_hash($input, PASSWORD_BCRYPT); // leave third parameter empty to generate random salt every time
	}

}

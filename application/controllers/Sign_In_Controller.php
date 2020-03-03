<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_In_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		// if the user is already signed in, redirect to home page
		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				redirect(base_url());
			}
		} else {
			// otherwise, load sign in model
			$this->load->model('Sign_In_Model');
		}

	}

	public function loadSignInView() {

		// load sign in view
		$data['bodyContent'] = 'sign_in';
		$data['page'] = 'sign_in';
		$this->load->view('template', $data);
	}

	public function attemptSignIn() {

		// get post data from sign in form
		$postData = array(
			'username' => $this->input->post('usernameInput'),
			'password' => $this->input->post('passwordInput')
		);

		// fetch account details from model
		$loginAttempt = $this->Sign_In_Model->attemptSignIn($postData);
		$isUserAdmin = 0;

		// determine whether user is admin based upon data from model
		foreach ($loginAttempt as $curLogin) {
			$isUserAdmin = $curLogin->admin;
			break;
		}

		// display message if username isn't found
		if (empty($loginAttempt)) {
			$data['message'] = "Username not found";

			// reload view
			$data['bodyContent'] = 'sign_in';
			$data['page'] = 'sign_in';
			$this->load->view('template', $data);
		} else {
			$userPasswordHash = null;

			// hash inputted password
			foreach ($loginAttempt as $curAttempt) {
				$userPasswordHash = $curAttempt->UserPassword;
				break;
			}

			// verify hash
			if (password_verify($postData['password'], $userPasswordHash)) {
				// if hash is verified, log user in and store username in session
				$_SESSION['loggedIn'] = true;
				$_SESSION['loggedInUsername'] = $postData['username'];
				if ($isUserAdmin == 1) {
					$_SESSION['isAdmin'] = true;
				}

				// redirect to home page:
				redirect(base_url());
			} else {
				// if hash isn't verified, load view with appropriate message:
				$data['message'] = "Password is incorrect";

				$data['bodyContent'] = 'sign_in';
				$data['page'] = 'sign_in';
				$this->load->view('template', $data);
			}
		}
	}
}

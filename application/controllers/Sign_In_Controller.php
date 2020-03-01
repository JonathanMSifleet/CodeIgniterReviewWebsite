<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_In_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				redirect(base_url());
			}
		} else {
			$this->load->model('Sign_In_Model');
		}

	}

	public function loadSignInView() {

		$data['bodyContent'] = 'sign_in';
		$data['page'] = 'sign_in';

		$this->load->view('template', $data);
	}

	public function attemptSignIn() {
		$postData = array(
			'username' => $this->input->post('usernameInput'),
			'password' => $this->input->post('passwordInput')
		);

		$loginAttempt = $this->Sign_In_Model->attemptSignIn($postData);

		$isUserAdmin = 0;

		foreach($loginAttempt as $curLogin) {
			$isUserAdmin = $curLogin->admin;
			break;
		}

		if (empty($loginAttempt)) {
			$data['message'] = "Username not found";

			$data['bodyContent'] = 'sign_in';
			$data['page'] = 'sign_in';

			$this->load->view('template', $data);
		} else {
			$userPasswordHash = null;

			foreach ($loginAttempt as $curAttempt) {
				$userPasswordHash = $curAttempt->UserPassword;
				break;
			}

			if (password_verify($postData['password'], $userPasswordHash)) {
				$_SESSION['loggedIn'] = true;
				$_SESSION['loggedInUsername'] = $postData['username'];
				if($isUserAdmin == 1) {
					$_SESSION['isAdmin'] = true;
				}

				// redirect:
				redirect(base_url());
			} else {
				$data['message'] = "Password is incorrect";

				$data['bodyContent'] = 'sign_in';
				$data['page'] = 'sign_in';

				$this->load->view('template', $data);
			}
		}
	}
}

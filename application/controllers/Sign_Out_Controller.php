<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_Out_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function signOut() {

		// unset session variables
		unset($_SESSION['loggedIn'], $_SESSION['loggedInUsername'], $_SESSION['isAdmin']);

		// redirect to home page
		redirect(base_url());
	}
}

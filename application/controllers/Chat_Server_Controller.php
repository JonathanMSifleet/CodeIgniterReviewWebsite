<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chat_Server_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		if (!isset($_SESSION['loggedIn'])) {
			redirect(base_url() . "SignIn");
		} else if (isset($_SESSION['loggedIn'])) {
			if (!$_SESSION['loggedIn']) {
				redirect(base_url() . "SignIn");
			}
		}
	}

	public function loadChatServerView() {
		$this->load->view('chat_server');
	}
}

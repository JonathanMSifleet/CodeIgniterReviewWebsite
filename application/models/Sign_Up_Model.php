<?php

class Sign_Up_Model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function attemptSignUp($postData) {

		$query = $this->db->query("SELECT UserName FROM users WHERE UserName = '{$postData['username']}' LIMIT 1");

		return $query->result();

	}

	public function createAccount($postData) {
		$query = $this->db->query("INSERT INTO users (UserName, UserPassword, admin) VALUES( '{$postData['username']}', '{$postData['password']}', 0)");

		return;

	}

}

?>

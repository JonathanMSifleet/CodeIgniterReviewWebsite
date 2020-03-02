<?php

class Sign_In_Model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function attemptSignIn($postData) {

		// check if username is in the database
		$query = $this->db->query("SELECT * FROM users WHERE Username = '{$postData['username']}' LIMIT 1");
		return $query->result();

	}

}

?>

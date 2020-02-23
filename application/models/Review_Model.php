<?php

class Review_Model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function getReviewData($slug) {
		// get slug:

		$query = $this->db->query("SELECT DISTINCT * FROM activereviews WHERE slug = '$slug' LIMIT 1");
		return $query->result();

	}

	public function attemptPostComment($postData) {

		// UID, UserID, ReviewID, UserComment

		$query = $this->db->query("SELECT UserID FROM users WHERE UserName = '{$postData['username']}' LIMIT 1");
		$result = $query->result();

		$userID = "";

		foreach ($result as $curID) {
			$userID = $curID->UserID;
			break;
		}

		$query = $this->db->query("INSERT INTO gamescomments (UID, UserID, ReviewID, UserComment, TimeStamp) VALUES(null, '$userID', '{$postData['reviewID']}', '{$postData['comment']}', '{$postData['timeStamp']}')");

		return;

	}

	public function getComments() {

		$reviewID = $_SESSION['reviewID'];

		$this->db->query("SELECT * FROM gamescomments WHERE ReviewID = '$reviewID'");
		$result = $this->query->result();
		$json = json_encode($result);

		print_r($json);

	}

}

?>

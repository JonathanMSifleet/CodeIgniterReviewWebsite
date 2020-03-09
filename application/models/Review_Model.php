<?php

class Review_Model extends CI_Model {

	public function __construct() {

		$this->load->database();

	}

	public function getReviewData($slug) {

		// get review based upon slug
		$query = $this->db->query("SELECT DISTINCT * FROM activereviews WHERE slug = '$slug' LIMIT 1");
		return $query->result();
	}

	public function attemptPostComment($postData) {

		// get user ID from database
		$query = $this->db->query("SELECT UserID FROM users WHERE UserName = '{$_SESSION['loggedInUsername']}' LIMIT 1");
		$result = $query->result();

		$userID = "";

		foreach ($result as $curID) {
			$userID = $curID->UserID;
			break;
		}

		// insert comment into database
		$query = $this->db->query("INSERT INTO gamescomments (UID, UserID, ReviewID, UserComment, TimeStamp) VALUES(null, '$userID', '{$postData['reviewID']}', '{$postData['UserComment']}', '{$postData['TimeStamp']}')");
		return;

	}

	public function getComments() {

		// fetch comments from database:
		$query = $this->db->query("SELECT UID, UserComment, TimeStamp, UserName FROM gamescomments INNER JOIN users USING (UserID) WHERE ReviewID = {$_SESSION['reviewID']} ORDER BY TimeStamp DESC;");
		return $query->result();

	}

}

?>

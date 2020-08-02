<?php  

require_once "../models/db.php";
require_once "../models/userModel.php";

$user = new User();


if (isset($_POST["action"])) {

	if ($_POST["action"] == "delete") {
		$id = $_POST["userId"];
		$img = $_POST["delete_img"];
		$user->deleteUser($id, $img);
	}

	


}

<?php  

require_once "../models/db.php";
require_once "../models/userModel.php";

$user = new User();


if (isset($_POST["userId"])) {

	$id = $_POST["userId"];

	$user->deleteUser($id);


}

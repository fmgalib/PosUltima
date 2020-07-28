<?php  
require_once "db.php";

class User{

	// Create User
	public function insert($first_name, $last_name, $email, $password, $phone, $role, $image){
		$sql = "INSERT INTO users(first_name, last_name, user_email, user_password, user_phone, user_role, user_image) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$stmt = Connection::connect()->prepare($sql);
		if ($stmt->execute([$first_name, $last_name, $email, $password, $phone, $role, $image])) {
			return "ok";
		}
		else{
			return "error";
		}	
	}

	// Read User
	public function read(){
		$sql = "SELECT * FROM users ORDER BY user_id DESC";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	// Total Row Count
	public function totalRowCount(){
		$sql = "SELECT * FROM users";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute();
		$t_rows = $stmt->rowCount();
		return $t_rows;
	}

	// Read User By ID
	public function getUserById($id){
		$sql = "SELECT * FROM users WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	// Activate User
	public function activateUser($id){
		$sql = "UPDATE user SET user_status = 1 WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	// Deactivate User
	public function dectivateUser($id){
		$sql = "UPDATE user SET user_status = 0 WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	// Delete User
	public function deleteUser($id){
		$sql = "DELETE FROM users WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}
}
	

	// // Update User
	// public function update($id, $fullName, $userName, $email, $password, $phone, $role, $image){
	// 	$sql = "UPDATE user SET user_full_name = :fullName, user_name = :userName, user_email = :email, user_password = :password, user_phone = :phone, user_role = :role, user_image = :image WHERE id = :id";
	// 	$stmt = $this->conn->prepare($sql);
	// 	$stmt->execute(['fullName'=>$fullName, 'userName'=>$userName, 'email'=>$email, 'password'=>$password, 'phone'=>$phone, 'role'=>$role, 'image'=>$image, 'user_id'=>$id]);
	// 	return true;
	// }

	// // Delete User
	// public function delete($id){
	// 	$sql = "DELETE FROM users WHERE user_id = :id";
	// 	$stmt = $this->conn->prepare($sql);
	// 	$stmt->execute(['id'=>$id]);
	// 	return true;
	// }

	
	

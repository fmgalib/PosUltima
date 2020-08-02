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
		$sql = "UPDATE users SET user_status = 1 WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return "ok";
	}

	// Deactivate User
	public function dectivateUser($id){
		$sql = "UPDATE users SET user_status = 0 WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return "ok";
	}

	// Delete User
	public function deleteUser($id, $img){
		$sql = "DELETE FROM users WHERE user_id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->execute(['id'=>$id]);
		unlink('../resources/images/users/'.$img);
		return true;
	}

	// Update User
	public function updateUser($id, $first_name, $last_name, $email, $password, $phone, $role, $image){
		$sql = "UPDATE users SET first_name = :first_name, last_name = :last_name, user_email = :email, user_password = :password, user_phone = :phone, user_role = :role, user_image = :image WHERE user_id = :id";

		$stmt = Connection::connect()->prepare($sql);


		if ($stmt->execute(['id'=>$id, 'first_name'=>$first_name, 'last_name'=>$last_name, 'email'=>$email, 'password'=>$password, 'phone'=>$phone, 'role'=>$role, 'image'=>$image])
		) {
			
			return "ok";
		}else{
			return "error";
		}
		
	}

}
	

	
	
	

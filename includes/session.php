<?php
	include "../db/config.php";
	/**
	* 
	*/
	class SessionLogin extends Connection
	{
		
		function checkUser($table, $fields){
			$conn = $this->conn;
			$sql = "";
			foreach ($fields as $key => $value) {
				$sql .= $key . "='" . $value . "' AND ";
			}
			$sql = substr($sql, 0, -4);
			$sql = "SELECT * FROM " . $table . " WHERE " . $sql;
			$query = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($query);
			return $row;
		}
	}
	$user_name = isset($_POST['username']) ? $_POST['username'] : '';
	$user_pwd = isset($_POST['password']) ? $_POST['password'] : '';
	// session_start();
	if($user_name && $user_pwd){
		session_start();
		$fields = array();
		$fields['user_name'] = 'mesa';
		$fields['password'] = 123;
		$user = new SessionLogin();
		$gotUser = $user->checkUser("users", $fields) ? $user->checkUser("users", $fields) : false;
		$_SESSION['user_name'] = $gotUser['user_name'];

	}
	if(isset($_SESSION['user_name'])){
		// header("Location: http://localhost:8585/oop/");
		echo $_SESSION['user_name'];
	}
?>
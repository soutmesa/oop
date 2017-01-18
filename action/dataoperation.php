<?php 
	include "../db/config.php";
	/**
	* 
	*/
	class DataOperation extends Connection
	{
		
		function insert($table,$fields)
		{
			$conn = $this->conn;
			$sql = "INSERT INTO " . $table . " ";
			$sql .= "(" . implode(", ", array_keys($fields)) . ") VALUES ";
			$sql .=  "('" .implode("', '", array_values($fields)) . "')";
			mysqli_query($conn, $sql);
			$last_id = mysqli_insert_id($conn);
			return $last_id;
		}

		function update($table, $fields, $id)
		{
			$conn = $this->conn;
			$sql = "";
			foreach ($fields as $key => $value) {
				$sql .= $key . "='" . $value . "', ";
			}
			$sql = substr($sql, 0, -2);
			$sql = "UPDATE " . $table . " SET " . $sql . " WHERE id = '" . $id . "'";
			$updated = mysqli_query($conn, $sql);
			if($updated){
				return 'updated';
			}else{
				return "Failed";
			}
		}

		function delete($table, $id)
		{
			$conn = $this->conn;
			$sql = "DELETE FROM " . $table . " WHERE id = '" . $id . " '";
			$deleted = mysqli_query($conn, $sql);
			if ($deleted) {
				return "success";
			}else{
				return "Failed";
			}
		}

		function selectOne($table,$id)
		{
			$conn = $this->conn;
			$sql = "SELECT * FROM " . $table . " WHERE id = '" . $id . " '";
			$query = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($query);
			return json_encode($row);
		}

		function selectAll($table)
		{
			$datas = array();
			$conn = $this->conn;
			$sql = "SELECT * FROM " . $table;
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($query)) {
				$datas[] = $row;
			}
			return json_encode($datas);
		}
	}
?>
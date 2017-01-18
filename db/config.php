<?php
	/**
	* 
	*/
	class Connection{
		public $conn;
		public function __construct(){
			$this->conn = mysqli_connect("localhost", "root", "extract", "oop");
			if(!$this->conn){
				echo mysql_error();
			}
		}
	}
?>
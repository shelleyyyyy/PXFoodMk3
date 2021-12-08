<?php

Class register {
	
	public $conn;
	
	function __construct(){

		$this->conn = new mysqli("localhost", "root", "", "pxfood");
	}
	
	function newRegister ($name, $username, $email, $phone, $password){
		
		
		$sql = "INSERT INTO users (name, username, email, phone, password)
				VALUES ('$name', '$username', '$email', '$phone', '$password')"; 
		
			
		if ($this->conn->query($sql) == TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: record couldn’t be inserted";
		}
		$this->conn->close();		

		include "view/pages/home.php";
		viewHome();
	}
}
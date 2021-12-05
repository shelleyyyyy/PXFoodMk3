<?php

Class register {
	
	public $conn;
	
	function __construct(){

		$this->conn = new mysqli("localhost", "root", "", "pxfood");
	}
	
	function newRegister ($name, $username, $email, $phone, $password){
		
		
        $sql = "SELECT id, name FROM users where email='$email'";
		
        $result = $this->$conn->query($sql);
			
		if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $id = $row["id"];
                $displayName = $row["name"];
        
                echo "ID &nbsp;&nbsp; Name &nbsp;&nbsp; Email<br>";
                echo "$id &nbsp;&nbsp; $displayName &nbsp;&nbsp; $email<br>";
            }
        }else{
            echo "zero results found";
        }		
	}
}
<?php

Class signIn {
	
	public $conn;
	
	function __construct(){

		$this->conn = new mysqli("localhost", "root", "", "pxfood");
	}
	
	function newSignIn ($username, $password){

        // include 'view/htmlComponents/signIntest.php';
		
        $username = $_REQUEST['username'];
		$sql = "SELECT id, password FROM users WHERE username='$username'";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $id = $row["id"];
                $pass = $row["password"];

                // echo "$id &nbsp;&nbsp; $username &nbsp;&nbsp; $pass  &nbsp;&nbsp; $password";
            }
        }else{
            echo "zero results found";
        }

        if ($password == $pass){
            // echo "correct password:  ";
            // echo "$username     $password";
            // include 'view/htmlComponents/nav.php';

            // echo $_COOKIE['bool'];

            $_COOKIE['bool'] = true;

            echo $_COOKIE['bool'];

        }else{
            echo "incorrect password";
            return false;
        }

		$this->conn->close();
	}
}

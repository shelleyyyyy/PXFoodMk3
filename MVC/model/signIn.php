<?php


Class signIn {
    // session_start();
	
	public $conn;
	
	function __construct(){

		$this->conn = new mysqli("localhost", "root", "", "pxfood");
	}
	
	function newSignIn ($username, $password){
        // session_start();

        // include 'view/htmlComponents/signIntest.php';
		
        $username = $_REQUEST['username'];
		$sql = "SELECT id, name, email, phone, password FROM users WHERE username='$username'";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $id = $row["id"];
                $name = $row["name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $pass = $row["password"];


                // echo "$id &nbsp;&nbsp; $username &nbsp;&nbsp; $pass  &nbsp;&nbsp; $password";
                

                if ($password == $pass){
                    // echo "correct password:  ";
                    // echo "$username     $password";
                    // include 'view/htmlComponents/nav.php';
        
                    // echo $_COOKIE['bool'];
        
                    
        
                    $_SESSION['sess_bool'] = true;
        
                    $_SESSION['sess_username'] = $username;
                    $_SESSION['sess_name'] = $name;
                    $_SESSION['sess_email'] = $email;
                    $_SESSION['sess_phone'] = $phone;
                    $_SESSION['sess_pass'] = $password;
        
                    // header("location:http://localhost/pxfoodmk3/mvc/index.php?flag=home");
        
                    // echo "$username";
        
                }else{
                    echo '<script>alert("Incorrect Password For this account")</script>';
                }
            }
        }else{
            echo '<script>alert("This username does not have an account associated")</script>';
            $pass = "";
        }

        

		$this->conn->close();

        include "view/pages/home.php";
		viewHome();
    }
}

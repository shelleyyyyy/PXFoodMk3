<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "localhost";
$dbName = "PXFOODMK3";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
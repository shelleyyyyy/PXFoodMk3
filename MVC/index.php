<?php

session_start();

include "controller/control.php";

$book = new cntrBook();

if(!isset($_REQUEST['flag'])){
     $book->viewMenu();
}else{
    $book->actions($_REQUEST['flag']);
    // include "view/pages/home.php";
}

// 12/8/21
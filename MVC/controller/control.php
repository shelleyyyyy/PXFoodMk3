<?php

include "view/htmlComponents/nav.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class cntrBook {

    public $model, $view;
	
	function __construct() {	
	}

	function viewMenu(){
		$this->view = new siteMenue();
	}

    function actions($flag) {		

		$this->viewMenu();
		
		if($flag=="home"){
			include "view/pages/home.php";
		 	viewHome();
		}  

		if($flag=="newRegister"){
			include "model/register.php";
			$this->model = new register();
		  	$this->model->newRegister ($_REQUEST['name'], $_REQUEST['username'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['password']);		  
		}		

		if($flag=="newSignIn"){
			include "model/signIn.php";
			$this->model = new signIn();
			$this->model->newSignIn ($_REQUEST['username'], $_REQUEST['password']);		  
	  	}

		if($flag=="grill"){
			include "view/pages/grill.php";
			viewGrill();
		}

		if($flag=="fresh"){
			include "view/pages/freshins.php";
			viewFreshins();
		}

		if($flag=="smoth"){
			include "view/pages/smothies.php";
			viewSmothies();
		}

		if($flag=="star"){
			include "view/pages/starbucks.php";
			viewStarbucks();
		}

		if($flag=="user"){
			include "view/pages/userInfo.php";
			viewUserInfo();
		}

		if($flag=="kill"){
			session_destroy();
			include "view/pages/home.php";
		 	viewHome();
			Header('Location: '.$_SERVER['PHP_SELF']);
			Exit();
		}
	}
}



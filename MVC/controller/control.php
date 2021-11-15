<?php

include "view/htmlComponents/nav.php";
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
		}  

		// include "./MVC/model/register.php";
		// $this->model = new register();
		
		if($flag=="newRegister"){
		  	$this->model->newRegister ($_REQUEST['name'], $_REQUEST['username'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['password']);		  
		}

		if($flag=="grill"){
			include "view/pages/grill.html";
		}

		if($flag=="fresh"){
			include "view/pages/freshins.html";
		}

		if($flag=="smoth"){
			include "view/pages/smothies.html";
		}

		if($flag=="star"){
			include "view/pages/starbucks.html";
		}
	}
}
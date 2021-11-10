<?php

include "view/htmlComponents/nav.html";

class cntrBook {

    public $model, $view;
	
	function __construct() {	
	}

	function viewMenu(){

	}

    function actions($flag) {		

		$this->viewMenu();
		
		if($flag=="home"){
		   include "view/pages/home.html";
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
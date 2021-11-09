<?php

include "view/htmlComponents/nav.html";


class cntrBook {

    public $model, $view;
	
	function __construct() {	
	}

    function actions($flag) {		
		
		if($flag=="home"){
		   include "view/home.html";
		}  
	}
}
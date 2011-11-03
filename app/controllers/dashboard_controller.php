<?php

class DashboardController extends AppController {
	
	var $name = 'Dashboard' ;
	var $uses = array( 'Funcionario' ) ;
	
	function index() {

		$this->layout = 'manager_layout' ;
		
				
	}
	
}
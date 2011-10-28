<?php

class LoginController extends AppController {
	
	var $name = 'Login' ;
	var $uses = array ('Funcionario') ;
	
	function index () {
		
		$this->layout = '';
		echo "Teste";
		
		
	}
	
	
	
}
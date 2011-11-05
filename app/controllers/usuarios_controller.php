<?php

class UsuariosController extends AppController {
	
	var $name = 'Usuarios';
	var $uses = array ( 'Funcionario' ) ;
	
	
//	function beforeFilter() {
//		
//		if ($_SESSION['perfil_id'] != 1 ){
//			
//			echo "Se fu";
//			
//		} else {
//			
//			$this->render('/usuarios/index') ;
//			
//		}
//		
//	}
	
	function index(){
		
		$this->layout = 'manager_layout' ;
		
		$this->set('teste' , 'teste') ;
				
	}
	
}
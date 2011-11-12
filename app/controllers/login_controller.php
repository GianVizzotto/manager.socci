<?php

App::Import('Sanitize');

class LoginController extends AppController {
	
	var $name = 'Login' ;
	var $uses = array ('Funcionario') ;
	var $logado = false ;
	
	function beforeFilter(){
		
//		$this->Auth->userModel = 'Funcionario' ;
//		$this->Auth->fields['username'] = 'email_corp' ;
//		$this->Auth->fields['password'] = 'password' ;
		
		 
		//$this->Auth->autoRedirect = false;
//		$this->Auth->loginRedirect = array('controller' => 'dashboard' , 'action' => 'index') ;
//		$this->Auth->loginError = "<span class=small>Usuário e/ou Senha inválido(s)</span>" ;
		
	}	
	
	function index () {
		
		$this->layout = '';
		
		$login = true ;
//	Verifica se há dados em POST	
				
			if($this->data){
				
//		Disponibiliza os dados postados para a model		
				$this->Funcionario->set($this->data);
//		Verifica as regras de validação		
				//if($this->Funcionario->validates()){
//		Consulta a função criada na model para validar o login, o método Sanitize::clean torna a string livre de sql hacks		
				$result = $this->Funcionario->checkUsuario(Sanitize::clean($this->data));
				
				if($result){
					
					$this->Session->start();
					
					$_SESSION['funcionario'] = array(
						'id' => $result['Funcionario']['id'],
						'data' => date('d-m-Y'),
						'hora' => date('h:m:i'),
						'perfil_id' => $result['Funcionario']['perfil_id'],
					) ;
					
					if($result['Funcionario']['perfil_id'] == 1){
												
						$this->redirect('/dashboard') ;
						
					} else {
//						$this->redirect('/dashboard/index') ;
					}			
					
				} else {
					
					$this->set('error' , true);
					
				}
							
			//} 
			
		}
		
	}

//	function login() {
//		
//		$this->layout = '' ;
//		
////		if ($this->Auth->user()){
////			$this->redirect('/dashboard/index');
//////			echo "Ta logado"
////;		}
////		Configure::write('logado' , true);
//
////		var_dump($this->Auth->user());
// 	
//    }
//
    function logout() {
    	
//    	$this->redirect($this->Auth->logout());
		$this->Session->destroy();
		$this->redirect("index");
    	
    }
	
}
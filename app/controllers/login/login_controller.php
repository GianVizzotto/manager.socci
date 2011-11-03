<?php

App::Import('Sanitize');

class LoginController extends AppController {
	
	var $name = 'Login' ;
	var $uses = array ('Funcionario') ;
	
	function index () {
		
		$this->layout = '';
//	Verifica se há dados em POST		
			if($this->data){
//		Disponibiliza os dados postados para a model		
				$this->Funcionario->set($this->data);
//		Verifica as regras de validação		
				if($this->Funcionario->validates()){
//		Consulta a função criada na model para validar o login, o método Sanitize::clean torna a string livre de sql hacks		
				$result = $this->Funcionario->checkUsuario(Sanitize::clean($this->data));
				
				if($result){
					
					$_SESSION['funcionario'] = array('id' => $result['Funcionario']['id'] , 'data' => date('d-m-Y') , 'hora' => date('h:m:i') ) ;
					
					if($result['Funcionario']['perfil_id'] == 1){
						
//						$this->redirect('/admin/dashboard/index') ;
						echo "<h1><font color=red>Logado com sucesso</font></h1>";
						
					} else {
//						$this->redirect('/dashboard/index') ;
					}			
					
				} else {
					
					$this->set('error' , true);
					
				}
							
			} 
			
		}
		
	}	
	
}
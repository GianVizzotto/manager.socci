<?php

class UsuariosController extends AppController {
	
	var $name = 'Usuarios';
	var $uses = array ( 'Funcionario' , 'Cargo' , 'Perfil' , 'Setor' , 'Banco' ) ;
	
	
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
		
		$funcionarios = $this->Funcionario->listaUsuarios();

		$this->set( 'funcionarios' , $funcionarios ) ;
		
	}
	
	function add( $usuario_id = null ){
		
		if ($usuario_id){
			$this->Funcionario->id = $usuario_id ;
		}
		
		$this->set('estados' , array('1' => 'SP')) ;
		
		$cargos = $this->Cargo->getCargos() ;
		$cargos = array('' => 'Selecione') + (array)$cargos ;
		$this->set( 'cargos' , $cargos  ) ;
		
		$perfis = $this->Perfil->getPerfis() ;
		$perfis = array('' => 'Selecione') + (array)$perfis ;
		$this->set( 'perfis' , $perfis  ) ;
		
		$setores = $this->Setor->getSetores() ;
		$setores = array('' => 'Selecione') + (array)$setores ;
		$this->set( 'setores' , $setores  ) ;
		
		$bancos = $this->Banco->getBancos() ;
		$bancos = array('' => 'Selecione') + (array)$bancos ;
		$this->set( 'bancos' , $bancos  ) ;
		
		if( !empty ( $this->data ) ) {
			
			$this->Funcionario->set($this->data);
			
			if( $this->Funcionario->validates() ) {
			
				$this->data['Funcionario']['password'] = $this->Auth->password($this->data['Funcionario']['password']) ;
			
				$result = $this->Funcionario->save($this->data);
//				var_dump($result);
				if($result){
					
					$this->Session->setFlash('Usuário cadastrado com sucesso!', 'flash_confirm');
					$this->redirect('/usuarios');
					
				} else {
					
					$this->Session->setFlash('Erro ao cadastrar Usuário!', 'flash_error');					
					$this->redirect('/usuarios');
					
				}
			}	
						
		} else {
			
			$this->data = $this->Funcionario->read() ;
			
		}		
		
	}
	
	function remove($usuario_id){
		
		$this->layout = '';
		$this->render(false) ;
		
		$usuario_id = Sanitize::clean($usuario_id);
		
		$this->Funcionario->id = $usuario_id ;
		
		$result = $this->Funcionario->invalidaLogin($usuario_id) ;
		
		if($result){
			
			$this->Session->setFlash('Usuário inativado com sucesso!', 'flash_confirm');
			$this->redirect('/usuarios');
			
		} else {
			
			$this->Session->setFlash('Erro ao inativar usuário!', 'flash_error');
			$this->redirect('/usuarios');
			
		}
		
	}
	
}
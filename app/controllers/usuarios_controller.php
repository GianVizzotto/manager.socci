<?php

 /**
  * 
  * Controller para manipulação de usuários
  * @author gian
  * @since 07-11-2011
  * @email gfvizzotto@gmail.com
  */

class UsuariosController extends AppController {
	
	var $name = 'Usuarios';
	var $uses = array ( 'Funcionario' , 'Cargo' , 'Perfil' , 'Setor' , 'Banco' , 'Cidade' , 'Estado' ) ;
	
	
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

	/**
	 * 
	 * Função que exibe tela padrão com listagem dos usuários ativos do sistema.
	 */
	
	function index(){
		
		$this->layout = 'manager_layout' ;
		
		$funcionarios = $this->Funcionario->listaUsuarios();

		$this->set( 'funcionarios' , $funcionarios ) ;
		
	}
	
	/**
	 * 
	 * Função para cadastro ou edição de usuários no sistema
	 * @param int $usuario_id
	 */
	
	function add( $usuario_id = null ){
		
		if ( $usuario_id ){
			
			$this->Funcionario->id = Sanitize::clean($usuario_id) ;
			
		}
		
		$estados = $this->Estado->getEstados() ;
		$estados = array('' => 'Selecione') + (array)$estados ;
		$this->set( 'estados' , $estados  ) ;
		
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
				
				if( $this->Funcionario->addusuario($this->data) ){
					
					$this->Session->setFlash('Usuário cadastrado com sucesso!', 'flash_confirm');
					$this->redirect('/usuarios');
					//echo "Adicionado com sucesso";
					
				} else {
					
//					$this->Session->setFlash('Erro ao cadastrar Usuário!', 'flash_error');					
//					$this->redirect('/usuarios');
					
					
				}
				
			}	
						
		} else {
			
			$this->data = $this->Funcionario->read() ;
			
//			if($this->data['Funcionario']['estado_id']){
//				
//				$cidades = $this->requestHtml('/usuarios/cidades'.$this->data['Funcionario']['estado_id']);
//				$this->set('cidades' , $cidades);
//			}
			
		}		
		
	}
	
	/**
	 * 
	 * Função que inativa um usuário do sistema, porém não exclui as informações
	 * @param int $usuario_id
	 */
	
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
	
	function cidades($estado_id , $cidade_id = null){
		
		$this->layout = '' ;
		
		$estado_id = Sanitize::clean($estado_id) ;
		
		echo $cidade_id;
		
		if($cidade_id != 'undefined'){
			
			$cidade_id = Sanitize::clean($cidade_id);
			
			$cidades = $this->Cidade->getCidades($estado_id , $cidade_id) ;
			
		} else {
			
			$cidades = $this->Cidade->getCidades($estado_id) ;
			$cidades = array('' => 'Selecione') + (array)$cidades ;
			
		}	
		
		
		
		$this->set( 'cidades' , $cidades ) ;
		
	}
	
}
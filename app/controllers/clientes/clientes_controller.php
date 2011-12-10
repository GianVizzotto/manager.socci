<?php

App::Import('Sanitize');

class ClientesController extends AppController {
	
	var $name = 'Clientes' ;
	var $uses = array ('Cliente', 'Cidade' , 'Estado') ;
	
	// function beforeFilter(){
		// if (!$_SESSION['funcionario']){
			// $this->redirect("/login");
		// }
	// }	
	
	function index () {
		
		$this->layout = 'manager_layout';
		
		$this->set('clientes',$this->Cliente->find('all'));
		
	}
	
	function edit($id = null){
		$this->layout = 'manager_layout';
		
		if($id != null){
			
			$this->Cliente->id = Sanitize::clean($id);
			
		}
		
		$estados = $this->Estado->getEstados() ;
		$estados = array('' => 'Selecione') + (array)$estados ;
		$this->set( 'estados' , $estados  ) ;

		$estados_2 = $this->Estado->getEstados() ;
		$estados_2 = array('' => 'Selecione') + (array)$estados_2 ;
		$this->set( 'estados_2' , $estados_2  ) ;
		
		$cobranca_estados = $this->Estado->getEstados() ;
		$cobranca_estados = array('' => 'Selecione') + (array)$cobranca_estados ;
		$this->set( 'cobranca_estados' , $cobranca_estados  ) ;		
		
		if (empty($this->data)){
			$this->data = $this->Cliente->read();
		}else{
			$this->Cliente->set($this->data);
			if ($this->Cliente->validates()){
				if ($this->Cliente->addeditCliente(Sanitize::clean($this->data))){
					$this->Session->setFlash('Cliente editado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao editar Cliente!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
		if(isset($this->data['Cliente']['estado_id'])){
			$cidades = $this->requestActionHTML('/clientes/cidades/'.$this->data['Cliente']['estado_id'].'/'.$this->data['Cliente']['cidade_id']) ;
		} else {
			$cidades = $this->requestActionHTML('/clientes/cidades/') ;
		}
		$this->set('cidades' , $cidades);
		
		if(isset($this->data['Cliente']['estado_id_2'])){
			$cidades_2 = $this->requestActionHTML('/clientes/cidades_2/'.$this->data['Cliente']['estado_id_2'].'/'.$this->data['Cliente']['cidade_id_2']) ;
		} else {
			$cidades_2 = $this->requestActionHTML('/clientes/cidades_2/') ;
		}
		$this->set('cidades_2' , $cidades_2);
		
		if(isset($this->data['Cliente']['cobranca_estado_id'])){
			$cobranca_cidades = $this->requestActionHTML('/clientes/cobranca_cidades/'.$this->data['Cliente']['cobranca_estado_id'].'/'.$this->data['Cliente']['cobranca_cidade_id']) ;
		} else {
			$cobranca_cidades = $this->requestActionHTML('/clientes/cobranca_cidades/') ;
		}
		$this->set('cobranca_cidades' , $cobranca_cidades);
		
	}
	
	function add(){
		$this->layout = 'manager_layout';
		
		$estados = $this->Estado->getEstados() ;
		$estados = array('' => 'Selecione') + (array)$estados ;
		$this->set( 'estados' , $estados  ) ;

		$estados_2 = $this->Estado->getEstados() ;
		$estados_2 = array('' => 'Selecione') + (array)$estados_2 ;
		$this->set( 'estados_2' , $estados_2  ) ;
		
		$cobranca_estados = $this->Estado->getEstados() ;
		$cobranca_estados = array('' => 'Selecione') + (array)$cobranca_estados ;
		$this->set( 'cobranca_estados' , $cobranca_estados  ) ;

		
		if (!empty($this->data)){
			$this->Cliente->set($this->data);
			if ($this->Cliente->validates()){
				if ($this->Cliente->addeditCliente(Sanitize::clean($this->data))){
					$this->Session->setFlash('Cliente cadastrado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao cadastrar Cliente!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
		if(isset($this->data['Cliente']['estado_id'])){
			$cidades = $this->requestActionHTML('/clientes/cidades/'.$this->data['Cliente']['estado_id'].'/'.$this->data['Cliente']['cidade_id']) ;
		} else {
			$cidades = $this->requestActionHTML('/clientes/cidades/') ;
		}
		$this->set('cidades' , $cidades);
		
		if(isset($this->data['Cliente']['estado_id_2'])){
			$cidades_2 = $this->requestActionHTML('/clientes/cidades_2/'.$this->data['Cliente']['estado_id_2'].'/'.$this->data['Cliente']['cidade_id_2']) ;
		} else {
			$cidades_2 = $this->requestActionHTML('/clientes/cidades_2/') ;
		}
		$this->set('cidades_2' , $cidades_2);
		
		if(isset($this->data['Cliente']['cobranca_estado_id'])){
			$cobranca_cidades = $this->requestActionHTML('/clientes/cobranca_cidades/'.$this->data['Cliente']['cobranca_estado_id'].'/'.$this->data['Cliente']['cobranca_cidade_id']) ;
		} else {
			$cobranca_cidades = $this->requestActionHTML('/clientes/cobranca_cidades/') ;
		}
		$this->set('cobranca_cidades' , $cobranca_cidades);
		
	}

	function remove($id){
		
		$this->layout = '' ;
		
		if ($this->Cliente->deleteCliente(Sanitize::clean($id))){
			$this->Session->setFlash('Cliente exclu&iacute;do com sucesso!', 'flash_confirm');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erro ao excluir Cliente!', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function cidades($estado_id = 0, $cidade_id = null){
		
		$this->layout = '' ;
			
			$estado_id = Sanitize::clean($estado_id) ;
			$cidade_id = Sanitize::clean($cidade_id);
			$cidades = $this->Cidade->getCidades($estado_id , $cidade_id) ;
		
		$this->set( 'cidades' , $cidades ) ;
		$this->set( 'cidades_id' , $cidade_id ) ;
		
	}
	
	function cidades_2($estado_id = 0, $cidade_id = null){
		
		$this->layout = '' ;
			
			$estado_id = Sanitize::clean($estado_id) ;
			$cidade_id = Sanitize::clean($cidade_id);
			$cidades = $this->Cidade->getCidades($estado_id , $cidade_id) ;
		
		$this->set( 'cidades' , $cidades ) ;
		$this->set( 'cidades_id' , $cidade_id ) ;
		
	}
	
	function cobranca_cidades($estado_id = 0, $cidade_id = null){
		
		$this->layout = '' ;
			
			$estado_id = Sanitize::clean($estado_id) ;
			$cidade_id = Sanitize::clean($cidade_id);
			$cidades = $this->Cidade->getCidades($estado_id , $cidade_id) ;
		
		$this->set( 'cidades' , $cidades ) ;
		$this->set( 'cidades_id' , $cidade_id ) ;
		
	}
	
}
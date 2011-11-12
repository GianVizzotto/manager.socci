<?php

App::Import('Sanitize');

class CargosController extends AppController {
	
	var $name = 'Cargos' ;
	var $uses = array ('Cargo') ;
	
	// function beforeFilter(){
		// if (!$_SESSION['funcionario']){
			// $this->redirect("/login");
		// }
	// }
	
	function index () {
		
		$this->layout = 'manager_layout';
		$this->set('cargos',$this->Cargo->find('all'));		
		
	}
	
	function edit($id = null){
		$this->layout = 'manager_layout';
		
		if($id != null){
			$this->Cargo->id = Sanitize::clean($id);
		}
		
		if (empty($this->data)){
			$this->data = $this->Cargo->read();
		}else{
			$this->Cargo->set($this->data);
			if ($this->Cargo->validates()){
				if ($this->Cargo->addeditCargo(Sanitize::clean($this->data))){
					$this->Session->setFlash('Cargo editado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao editar Cargo!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
	}
	
	function add(){
		$this->layout = 'manager_layout';
		
		if (!empty($this->data)){
			$this->Cargo->set($this->data);
			if ($this->Cargo->validates()){
				if ($this->Cargo->addeditCargo(Sanitize::clean($this->data))){
					$this->Session->setFlash('Cargo cadastrado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao cadastrar Cargo!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
	}

	function remove($id){
		
		$this->layout = '' ;
		
		if ($this->Cargo->deleteCargo(Sanitize::clean($id))){
			$this->Session->setFlash('Cargo exclu&iacute;do com sucesso!', 'flash_confirm');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erro ao excluir Cargo!', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
	}
	
}
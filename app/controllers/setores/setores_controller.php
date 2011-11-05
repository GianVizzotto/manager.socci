<?php

App::Import('Sanitize');

class SetoresController extends AppController {
	
	var $name = 'Setores' ;
	var $uses = array ('Setor') ;
	
	// function beforeFilter(){
		// if (!$_SESSION['funcionario']){
			// $this->redirect("/login");
		// }
	// }	
	
	function index () {
		
		$this->layout = 'manager_layout';
		
		$this->set('setores',$this->Setor->find('all'));
		
	}
	
	function edit($id = null){
		$this->layout = 'manager_layout';
		
		$this->Setor->id = Sanitize::clean($id);
		
		if (empty($this->data)){
			$this->set('setores', $this->Setor->read());
		}else{
			$this->Setor->set($this->data);
			if ($this->Setor->addeditSetor(Sanitize::clean($this->data))){
				$this->Session->setFlash('Setor da empresa editado com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao editar Setor da empresa!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function add(){
		$this->layout = 'manager_layout';
		
		if (!empty($this->data)){
			$this->Setor->set($this->data);
			if ($this->Setor->validates()){
				if ($this->Setor->addeditSetor(Sanitize::clean($this->data))){
					$this->Session->setFlash('Setor da empresa cadastrado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao cadastrar Setor da empresa!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
	}

	function remove($id){
		if ($this->Setor->deleteSetor(Sanitize::clean($id))){
				$this->Session->setFlash('Setor da empresa exclu&iacute;do com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao excluir Setor da empresa!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
	}
	
}
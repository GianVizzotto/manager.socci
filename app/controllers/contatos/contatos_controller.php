<?php

App::Import('Sanitize');

class ContatosController extends AppController {
	
	var $name = 'Contatos' ;
	var $uses = array ('Contato') ;
	
	// function beforeFilter(){
		// if (!$_SESSION['funcionario']){
			// $this->redirect("/login");
		// }
	// }	
	
	function index () {
		
		$this->layout = 'manager_layout';
		
		$this->set('contatos',$this->Contato->find('all'));
		
	}
	
	function edit($id = null){
		$this->layout = 'manager_layout';
		
		$this->Contato->id = Sanitize::clean($id);
		
		if (empty($this->data)){
			$this->set('contatos', $this->Contato->read());
		}else{
			$this->Contato->set($this->data);
			if ($this->Contato->addeditContato(Sanitize::clean($this->data))){
				$this->Session->setFlash('Contato do cliente editado com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao editar Contato do Cliente!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function add(){
		$this->layout = 'manager_layout';
		
		if (!empty($this->data)){
			$this->Contato->set($this->data);
			if ($this->Contato->validates()){
				if ($this->Contato->addeditContato(Sanitize::clean($this->data))){
					$this->Session->setFlash('Contato do cliente cadastrado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao cadastrar Contato do cliente!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
	}

	function remove($id){
		
		$this->layout = '' ;
		
		if ($this->Contato->deleteContato(Sanitize::clean($id))){
				$this->Session->setFlash('Contato do cliente exclu&iacute;do com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao excluir Contato do cliente!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
	}
	
}
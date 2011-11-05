<?php

App::Import('Sanitize');

class BancosController extends AppController {
	
	var $name = 'Bancos' ;
	var $uses = array ('Banco') ;
	
	// function beforeFilter(){
		// if (!$_SESSION['funcionario']){
			// $this->redirect("/login");
		// }
	// }	
	
	function index () {
		
		$this->layout = '';
		
		$this->set('bancos',$this->Banco->find('all'));
		
	}
	
	function edit($id = null){
		$this->layout = '';
		
		$this->Banco->id = Sanitize::clean($id);
		
		if (empty($this->data)){
			$this->set('bancos', $this->Banco->read());
		}else{
			$this->Banco->set($this->data);
			if ($this->Banco->addeditBanco(Sanitize::clean($this->data))){
				$this->Session->setFlash('Banco editado com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao editar Banco!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function add(){
		$this->layout = '';
		
		if (!empty($this->data)){
			$this->Banco->set($this->data);
			if ($this->Banco->validates()){
				if ($this->Banco->addeditBanco(Sanitize::clean($this->data))){
					$this->Session->setFlash('Banco cadastrado com sucesso!', 'flash_confirm');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Erro ao cadastrar Banco!', 'flash_error');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
	}

	function remove($id){
		if ($this->Banco->deleteBanco(Sanitize::clean($id))){
				$this->Session->setFlash('Banco exclu&iacute;do com sucesso!', 'flash_confirm');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('Erro ao excluir Banco!', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
	}
	
}
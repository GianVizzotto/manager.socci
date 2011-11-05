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
		
<<<<<<< HEAD
		$this->layout = 'manager_layout';
		
=======
>>>>>>> 9ea2caf9be21a25a4b4701ced4ee307169ad2618
		$this->set('bancos',$this->Banco->find('all'));
		
	}
	
	function edit($id = null){
<<<<<<< HEAD
		$this->layout = 'manager_layout';
=======
>>>>>>> 9ea2caf9be21a25a4b4701ced4ee307169ad2618
		
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
<<<<<<< HEAD
		$this->layout = 'manager_layout';
=======
>>>>>>> 9ea2caf9be21a25a4b4701ced4ee307169ad2618
		
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
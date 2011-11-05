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
		
		$this->set('cargos',$this->Cargo->find('all'));		
		
	}
	
	function edit($id = null){
		
		$this->Cargo->id = Sanitize::clean($id);
		
		if (empty($this->data)){
			$this->set('cargos', $this->Cargo->read());
		}else{
			$this->Cargo->set($this->data);
			if ($this->Cargo->addeditCargo(Sanitize::clean($this->data))){
				$this->Session->setFlash('<div class="container_4 no-space push-down">
							<div class="alert-wrapper confirm clearfix">
								<div class="alert-text">
									Cargo editado com sucesso!
									<a href="#" class="close">Close</a>
								</div>
							</div>
						</div>');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('<div class="container_4 no-space push-down">
							<div class="alert-wrapper error clearfix">
								<div class="alert-text">
									Erro ao editar Cargo!
									<a href="#" class="close">Close</a>
								</div>
							</div>
						</div>');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function add(){
		
		if (!empty($this->data)){
			$this->Cargo->set($this->data);
			if ($this->Cargo->validates()){
				if ($this->Cargo->addeditCargo(Sanitize::clean($this->data))){
					$this->Session->setFlash('<div class="container_4 no-space push-down">
												<div class="alert-wrapper confirm clearfix">
													<div class="alert-text">
														Cargo cadastrado com sucesso!
														<a href="#" class="close">Close</a>
													</div>
												</div>
											</div>');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('<div class="container_4 no-space push-down">
												<div class="alert-wrapper error clearfix">
													<div class="alert-text">
														Error ao cadastrar Cargo!
														<a href="#" class="close">Close</a>
													</div>
												</div>
											</div>');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
	}

	function remove($id){
		if ($this->Cargo->deleteCargo(Sanitize::clean($id))){
				$this->Session->setFlash('<div class="container_4 no-space push-down">
											<div class="alert-wrapper confirm clearfix">
												<div class="alert-text">
													Cargo exclu&iacute;do com sucesso!
													<a href="#" class="close">Close</a>
												</div>
											</div>
										</div>');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('<div class="container_4 no-space push-down">
											<div class="alert-wrapper error clearfix">
												<div class="alert-text">
													Erro ao excluir Cargo!
													<a href="#" class="close">Close</a>
												</div>
											</div>
										</div>');
				$this->redirect(array('action' => 'index'));
			}
	}
	
}
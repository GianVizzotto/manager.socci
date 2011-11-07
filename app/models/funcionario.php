<?php

/**
 * 
 * Model para tratamento dos dados da tabela funcionarios pertencente ao schema entidades
 * @author gian
 * @since 27-10-2011
 * @email gfvizzotto@gmail.com
 */

class Funcionario extends AppModel {
	
	var $name = 'Funcionario' ;
	var $useDbConfig = 'entidades';
	var $primaryKey = 'id' ;
	
//	Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	var $validate = array (
		'email_corp' => array(
			'rule' => 'email',
			'message' => 'Digite seu email.'
			),
		'email_pessoal' => array(
			'rule' => 'email',
			'message' => 'Digite seu email.'
			),	
		'password' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite sua senha.'
			),
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),
		'sobrenome'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),
		'data_nascimento'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),	
		'data_contratacao'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),
		'cpf'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),
		'rg'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),	
		'ctps'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),
		'ctps'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio'
			),			
			
		);
	
	/**
	 * 
	 * Função responsável por verificar a veracidade dos dados informados no login
	 * @param array $info
	 */
	
	function checkUsuario($info){
		
		$login = $this->find('first' , array(
					'fields'=>array(
						'id',
						'senha',
						'perfil_id'						
							),
					'conditions'=>array(
						'email_corp'=>$info['Funcionario']['email_corp'],
						'status_usuario_id' => 1	
							)
						)
					);
					
		if($login){
			
			if($info['Funcionario']['senha'] == $login['Funcionario']['senha']){
				
				return $login ;
				
			} else {				
				return false ;				
			}
			
		}else {			
			return false ;			
		}			
			
	}
	
	/**
	 * 
	 * Função que lista os usuários cadastrados no sistema
	 * @param array $filtros
	 */
	
	function listaUsuarios( ){
		
		$funcionarios =	$this->find('all' , array(
							'fields' => array(
								'Funcionario.id',
								'Funcionario.nome',
								'Funcionario.sobrenome',
								'Setor.nome'
								),
							'joins' => array(
								array(
									'table' => 'setores',
									'alias' => 'Setor',
									'type'	=>	'INNER',
									'conditions' => array( 'Funcionario.setor_id = Setor.id'	)
									)
								),
							'conditions' => array('Funcionario.status_usuario_id' => 1 )	
							)
						);
						
		return $funcionarios ;						
			
	}
	
	function invalidaLogin ( $usuario_id ) {
						
		$dados['Funcionario']['status_usuario_id'] = 2 ;
		
	 	return $this->save($dados);
		
	}
	
	function addUsuario($dados) {
		
		if( $this->save($dados) ) {
			
			return true ;
			
		} else {
			
			return false ;
			
		}
		
	}
	
}
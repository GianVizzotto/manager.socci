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
	
	//Aqui são definidas as regras de validação do formulário, repare que o nome do campo do formulário necessita corresponder ao seu nome na tabela.
	
	var $validate = array (
		'email_corp' => array(
			'rule' => 'email',
			'message' => 'Digite um email válido.'
			),
		'email_pessoal' => array(
			'rule' => 'email',
			'message' => 'Digite um email válido.'
			),	
		'password' => array(
			'rule' => 'notEmpty',
			'message' => 'Digite sua senha.'
			),
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio.'
			),
		'sobrenome'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio.'
			),
		'data_nascimento'=>array(
			'rule' => array ('date' , 'ymd') ,
			'message' => 'Digite uma data válida.'
			),	
		'data_contratacao'=>array(
			'rule' => array ('date' , 'ymd') ,
			'message' => 'Digite uma data válida.'
			),
		'cpf'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio.'
			),
		'rg'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio.'
			),	
		'ctps'=>array(
			'rule' => 'notEmpty',
			'message' => 'Esse campo não pode ser vazio.'
			),
		'endereco'=>array(
			'rule' => 'notEmpty',
			'message' => 'Digite um endereço válido.'
			),
		'estado_id'=>array(
			'rule' => 'notEmpty',
			'message'=>'Escolha o estado.'
			),
        'cidade_id'=>array(
			'rule' => 'notEmpty',
			'message' => 'Escolha a cidade.'
			),
        'sexo'=>array(
			'rule' => 'notEmpty',
			'message' => 'Escolha o sexo.'
			),
        'cargo_id'=>array(
			'rule' => 'notEmpty',
			'message' => 'Selecione o cargo.'
			),
        'perfil_id'=>array(
			'rule' => 'notEmpty',
			'message' => 'Selecione o perfil que o usuário fará parte.'
			),
        'setor_id'=>array(
			'rule' => 'notEmpty',
			'message' => 'Selecione o setor que o usuário pertence.'
			),
        'banco_id'=>array(
			'rule' => 'notEmpty',
			'message' => 'Selecione um banco.'
			),
        'agencia'=>array(
			'rule' => 'notEmpty',
			'message' => 'Informe a agência bancária.'
			),
       	'conta'=>array(
			'rule' => 'notEmpty',
			'message' => 'Informe conta bancária.'
			),
     	'password'=>array(
			'rule' => 'notEmpty',
			'message' => 'Informe uma senha.'
			),
      	'tel_celular'=>array(
			'rule' => 'notEmpty',
			'message' => 'Informe o telefone celular.'
			)		
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
						'password',
						'perfil_id'						
							),
					'conditions'=>array(
						'email_corp'=>$info['Funcionario']['email_corp'],
						'status_usuario_id' => 1	
							)
						)
					);
					
		if($login){
			
			if($info['Funcionario']['password'] == $login['Funcionario']['password']){
				
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
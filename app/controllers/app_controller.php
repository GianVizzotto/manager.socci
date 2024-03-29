<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */

App::Import('Sanitize');

class AppController extends Controller {
	
	var $helpers = array ('Form', 'Html', 'Javascript', 'Number', 'Session') ;
	
	var $components = array (
//			'Auth' => array(
//				'authorize' => 'controller',
//			    'actionPath' => 'controllers/',
//		        'loginAction' => array(
//		        	'controller' => 'login',
//		        	'action' => 'login',
//		        	'plugin' => false,
//		        	'admin' => false,
//					),
//				'allowedActions' => array ('*')	
//			),
			'Session'						
		);
	
	function beforeFilter(){
		
		$this->layout='manager_layout';
		
//		$sessao = $this->Session->read();
//		
//		print_r($sessao);
//		
//		if($login){
//		
//			if(empty($sessao['funcionario']['id'])){
//				
//				$this->redirect('/index');
//				
//			}
//			
//		}
		
		
		
		//$this->Auth->userModel = 'Funcionario' ;
		
//		var_dump(Configure::read('logado'));
		
//		var_dump($this->Auth->user());
		
//		if(!$this->Auth->user()){
//			
//			$this->redirect('/login/logout');
//			
//		}
		
//		$this->Auth->authorize = 'login';
			
		
	}
	
	function requestActionHTML ( $url ) {
    	
    	$get = $_GET;
    	$request = $_REQUEST;

    	# Parseia URL para separ GET
    	$urlParsed =  parse_url ( $url ) ;
    	if(isset($urlParsed['query'])){
    		parse_str ( $urlParsed['query'] , $_GET ) ;
    	}
    	$_REQUEST = $_GET;
    
    	# Executa action e captura retorno
    	@ob_start ( );
    	new Dispatcher ( $url );
    	$content = @ob_get_clean ( );
    	
    	# Reseta a GET
    	$_GET = $get;
    	$_REQUEST = $request;
    	
    	return $content;
    	
    }
	
	
	
}

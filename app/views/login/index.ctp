<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Socci Manager</title>
<?php echo $this->Html->css("/css/master51a5.css?color=454E51&amp;login=true") ;?>
</head>

<body>
	
<div id="login-wrapper">
	<!-- Display the Logo -->
	<div id="logo"><h1>Socci WebManager</h1></div>
		
	<div id="login-form">
		<div class="alert-wrapper error" style="display:<?php echo isset($error) ? $error == true ? 'block' : 'none' : 'none' ; ?>;">
			<div class="alert-text">
				Dados de acesso inválidos.
			</div>
		</div>

		<?php echo $this->Form->create('Funcionario' , array (
			'url' => array( 
				'controller' => 'login',
				'action' => 'index'
				),
			'class' => 'styled',
			'inputDefaults' => array( 
				'label' => false,
				'div'   => false,
				'error' => array(
					'wrap'  => 'span',
					'class' => 'my-error-class'
						)
					)
				)
		 	); ?>
		
			<!-- Username Field -->
			<label for="username">
				<span>E-mail:</span>
				<?php echo $this->Form->input('email_corp' , array('type' => 'text') ) ;?>
			</label>
			
			<!-- Password Field -->
			<label for="password">
				<span>Senha:</span>
				<?php echo $this->Form->input('senha' , array('type' => 'password') );?>
			</label>
			
			<!-- Login button with custom CSS classes -->
						
			<?php echo $this->Form->button('Login' , array ( 'div' => false , 'class' => 'button red small') ) ;?>
			<?php echo $this->Form->end() ;?>
		
	</div>
	
	<!-- Some footer text, totally optional of course -->
	<div class="under-form">Copyright &copy;2011 Socci</div>

</div>

</body>
</html>
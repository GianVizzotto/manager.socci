
<?php echo $this->Html->css('/css/jquery/jquery-ui-1.8.16.custom.css');?>
<!-- BEGIN PAGE BREADCRUMBS/TITLE -->
<div class="container_4 no-space">
	<div id="page-heading" class="clearfix">
		
		<div class="grid_2 title-crumbs">
			<div class="page-wrap">
				<!--<a href="#">Home</a> / <a href="#">Page Layout</a> /--><br />
			</div>
		</div>
		<div class="grid_2 align_right">
			<div class="page-wrap">
				<a href="/usuarios" class="button red medium">Listagem</a>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE BREADCRUMBS/TITLE -->
<div class="container_4 no-space push-down">
	
	<?php
		echo $session->flash();
	?>

</div>
<div class="container_4">

	<!-- BEGIN TABLESORTER EXAMPLE
		 Tablesorter documentation can be found at their website:
	 
	 		http://tablesorter.com/docs/ -->
	
	<div class="grid_2">
		<div class="panel">
			<h2 class="cap">Novo Usuário</h2>
			<div class="content">
				
			<?php echo $this->Form->create('Funcionario' , array (
				'url' => array( 
					'controller' => 'usuarios',
					'action' => 'add'
					),
				'class' => 'styled',
				'inputDefaults' => array( 
					'label' => false,
					'div'   => false,
					'error' => array(
						'wrap'  => 'small'
							)
						)
					)
			 	); ?>
			 	
			<fieldset> 	
			<!-- Nome Field -->
				<?php echo $this->Form->input('id' , array('type' => 'hidden', 'class' => 'textbox') ) ;?>
			<label for="nome">
				<span>Nome:</span>
				<?php echo $this->Form->input('nome' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="sobrenome">
				<span>Sobrenome:</span>
				<?php echo $this->Form->input('sobrenome' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="data_nascimento">
				<span>Data Nascimento:</span>
				<?php echo $this->Form->input('data_nascimento' , array('type' => 'text' , 'class' => 'data') ) ;?>
			</label>
			
			<label for="cpf">
				<span>Cpf:</span>
				<?php echo $this->Form->input('cpf' , array('type' => 'text', 'class' => 'cpf') ) ;?>
			</label>
			
			<label for="rg">
				<span>RG:</span>
				<?php echo $this->Form->input('rg' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="ctps">
				<span>Número da Carteira de Trabalho:</span>
				<?php echo $this->Form->input('ctps' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="data_contratação">
				<span>Data Contratação:</span>
				<?php echo $this->Form->input('data_contratacao' , array('type' => 'text' ,'class' => 'data') ) ;?>
			</label>
			
			<label for="email_corporativo">
				<span>Email Corporativo:<br>(login no sistema)</span>
				<?php echo $this->Form->input('email_corp' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Senha">
				<span>Senha:</span>
				<?php echo $this->Form->input('password' , array('type' => 'password', 'class' => 'textbox') ) ;?>
			</label>
			
			<?php 
			if(isset( $usuario_id)):
				echo $this->Form->input('id' , array('type' => 'hidden', 'value' => $usuario_id) ) ;
			endif;
			?>
			
			<?php echo $this->Form->input('status_usuario_id' , array('type' => 'hidden', 'value' => 1) ) ;?>
			
			<label for="email_pessoal">
				<span>Email Pessoal:</span>
				<?php echo $this->Form->input('email_pessoal' , array('type' => 'text', 'class' => 'textbox' ) ) ;?>
			</label>
			
			<label for="tel_residencia">
				<span>Telefone Residencial:</span>
				<?php echo $this->Form->input('tel_residencia' , array( 'type' => 'text', 'class' => 'telefone' ) ) ;?>
			</label>
			
			<label for="tel_celular">
				<span>Celular:</span>
				<?php echo $this->Form->input('tel_celular' , array('type' => 'text', 'class' => 'telefone') ) ;?>
			</label>
			
			<label for="tel_adicional">
				<span>Telefone Adicional:</span>
				<?php echo $this->Form->input('tel_adicional' , array('type' => 'text', 'class' => 'telefone') ) ;?>
			</label>
			
			<label for="endereco">
				<span>Endereço:</span>
				<?php echo $this->Form->input('endereco' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="estado">
				<span>Estado:</span>
				<?php echo $this->Form->input('estado_id' , array('options' => $estados , 'class' => 'textbox' , 'onchange' => 'mostraCidades(this.value)') ) ;?>
			</label>
			
			<label class="cidades">
				<?php echo $cidades ;?>
			</label>
			<label for="sexo">
				<span>Sexo:</span>
				<?php echo $this->Form->input('sexo' , array( 'options' => array( '' => 'Selecione' , 'm' => 'Masculino' , 'f' => 'Feminino' ) , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Cargo">
				<span>Cargo:</span>
				<?php echo $this->Form->input('cargo_id' , array( 'options' => $cargos , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Perfil">
				<span>Perfl de Acesso:</span>
				<?php echo $this->Form->input('perfil_id' , array( 'options' => $perfis , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Setor">
				<span>Setor:</span>
				<?php echo $this->Form->input('setor_id' , array( 'options' => $setores , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Agencia">
				<span>Agência:</span>
				<?php echo $this->Form->input('agencia' , array( 'type' => 'text' , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Conta">
				<span>Conta Corrente:</span>
				<?php echo $this->Form->input('conta' , array( 'type' => 'text' , 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="Banco">
				<span>Banco:</span>
				<?php echo $this->Form->input('banco_id' , array( 'options' => $bancos , 'class' => 'textbox') ) ;?>
			</label>
			
			<!-- Login button with custom CSS classes -->
						
			<?php echo $this->Form->button('Salvar' , array ('class' => 'button medium green float_right') ) ;?>
			<?php echo $this->Form->end() ;?>
			</fieldset>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Javascript->link('/js/manager.js') ;?>
<?php echo $this->Javascript->link('/js/jquery/1.6.2/jquery-ui-1.8.16.custom.min.js') ;?>

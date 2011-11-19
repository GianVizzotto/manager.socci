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
				<a href="/clientes" class="button red medium">Lista de Clientes</a>
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
			<h2 class="cap">Editando Cliente</h2>
			<div class="content">			
				
			<?php echo $this->Form->create('Cliente' , array (
				'url' => array( 
					'controller' => 'clientes',
					'action' => 'edit'
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
					
			<label for="razao_social">
				<span>Razão Social do Cliente:</span>
				<?php echo $this->Form->input('razao_social' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			

			<label for="nome_fantasia">
				<span>Nome Fantasia do Cliente:</span>
				<?php echo $this->Form->input('nome_fantasia' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="cnpj">
				<span>CNPJ do Cliente:</span>
				<?php echo $this->Form->input('cnpj' , array('type' => 'text', 'class' => 'cnpj small') ) ;?>
			</label>

			<label for="inscricao_estadual">
				<span>Inscrição Estadual do Cliente:</span>
				<?php echo $this->Form->input('inscricao_estadual' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>			

			<label for="telefone_1">
				<span>Telefone 01 do Cliente:</span>
				<?php echo $this->Form->input('telefone_1' , array('type' => 'text', 'class' => 'telefone small') ) ;?>
			</label>	

			<label for="telefone_2">
				<span>Telefone 02 do Cliente:</span>
				<?php echo $this->Form->input('telefone_2' , array('type' => 'text', 'class' => 'telefone small') ) ;?>
			</label>	
			
			<label for="telefone_3">
				<span>Telefone 03 do Cliente:</span>
				<?php echo $this->Form->input('telefone_3' , array('type' => 'text', 'class' => 'telefone small') ) ;?>
			</label>
			<hr />
			<label for="endereco_1">
				<span>Endereço Principal do Cliente:</span>
				<?php echo $this->Form->input('endereco_1' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="estado">
				<span>Estado:</span>
				<?php echo $this->Form->input('estado_id' , array('options' => $estados , 'class' => 'textbox small' , 'onchange' => 'mostraCidades_2(this.value, ".cidades", "clientes", "cidades")') ) ;?>
			</label>
			
			<label class="cidades">
				<?php echo $cidades ;?>
			</label>
			<hr />
			<label for="endereco_2">
				<span>Endereço Secundário do Cliente:</span>
				<?php echo $this->Form->input('endereco_2' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="estado_2">
				<span>Estado:</span>
				<?php echo $this->Form->input('estado_id_2' , array('options' => $estados_2 , 'class' => 'textbox small' , 'onchange' => 'mostraCidades_2(this.value, ".cidades_2", "clientes", "cidades_2")') ) ;?>
			</label>
			
			<label class="cidades_2">
				<?php echo $cidades_2 ;?>
			</label>
			<hr />
			<label for="site">
				<span>Site do Cliente:</span>
				<?php echo $this->Form->input('site' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>

			<label for="descricao">
				<span>Descrição do Cliente:</span>
				<?php echo $this->Form->input('descricao' , array('type' => 'textarea', 'class' => 'textbox') ) ;?>
			</label>
			
			<label for="observacoes">
				<span>Observações do Cliente:</span>
				<?php echo $this->Form->input('observacoes' , array('type' => 'textarea', 'class' => 'textbox') ) ;?>
			</label>
			
			<hr />
			
			<label for="contato_nome_1">
				<span>Nome do Contato Principal</span>
				<?php echo $this->Form->input('contato_nome_1' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			<label for="contato_email_1">
				<span>Email do Contato Principal</span>
				<?php echo $this->Form->input('contato_email_1' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			<label for="contato_telefone_1">
				<span>Telefone do Contato Principal</span>
				<?php echo $this->Form->input('contato_telefone_1' , array('type' => 'text', 'class' => 'telefone small') ) ;?>
			</label>
			<hr />
			<label for="contato_nome_2">
				<span>Nome do Contato Secundário</span>
				<?php echo $this->Form->input('contato_nome_2' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			<label for="contato_email_2">
				<span>Email do Contato Secundário</span>
				<?php echo $this->Form->input('contato_email_2' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			<label for="contato_telefone_2">
				<span>Telefone do Contato Secundário</span>
				<?php echo $this->Form->input('contato_telefone_1' , array('type' => 'text', 'class' => 'telefone small') ) ;?>
			</label>
			
			<?php echo $this->Form->input('id' , array('type' => 'hidden') );?>
			
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
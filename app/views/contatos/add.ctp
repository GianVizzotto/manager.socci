<script type="text/javascript">
	
	jQuery(function($){
		$("#ContatoTelefone").mask("(99)9999-9999");
	});
	
</script>
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
				<a href="/contatos" class="button red medium">Lista de Contatos de Clientes</a>
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
			<h2 class="cap">Novo Contato de Cliente</h2>
			<div class="content">			
				
			<?php echo $this->Form->create('Contato' , array (
				'url' => array( 
					'controller' => 'contatos',
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
			<label for="nome">
				<span>Nome do Contato:</span>
				<?php echo $this->Form->input('nome' , array('type' => 'text', 'class' => 'textbox') ) ;?>
			</label>
			
			<!-- Numero Field -->
			<label for="descricao">
				<span>Email do Contato</span>
				<?php echo $this->Form->input('email' , array('type' => 'text', 'class' => 'textbox') );?>
			</label>

			<!-- Numero Field -->
			<label for="telefone">
				<span>Telefone do Contato</span>
				<?php echo $this->Form->input('telefone' , array('type' => 'text', 'class' => 'textbox small') );?>
			</label>
			
			<!-- Login button with custom CSS classes -->
						
			<?php echo $this->Form->button('Salvar' , array ('class' => 'button medium green float_right') ) ;?>
			<?php echo $this->Form->end() ;?>
			</fieldset>
			</div>
		</div>
	</div>
</div>

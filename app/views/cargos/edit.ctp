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
				<a href="/cargos" class="button red medium">Lista de Cargos</a>
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
	
	<div class="grid_3">
		<div class="panel">
			<h2 class="cap">Editando Cargo</h2>
			<div class="content">			
				
			<?php echo $this->Form->create('Cargo' , array (
				'url' => array( 
					'controller' => 'cargos',
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
			<!-- Nome Field -->
			<label for="nome">
				<span>Nome do Cargo:</span>
				<?php echo $this->Form->input('nome' , array('type' => 'text', 'class' => 'textbox small') ) ;?>
			</label>
			
			<!-- Numero Field -->
			<label for="descricao">
				<span>Descri&ccedil;&atilde;o do Cargo</span>
				<?php echo $this->Form->input('descricao' , array('type' => 'textarea', 'class' => 'textbox') );?>
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
</div>


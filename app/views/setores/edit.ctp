<!-- BEGIN PAGE BREADCRUMBS/TITLE -->
<div class="container_4 no-space">
	<div id="page-heading" class="clearfix">
		
		<div class="grid_2 title-crumbs">
			<div class="page-wrap">
				<a href="#">Home</a> / <a href="#">Page Layout</a> /<br />
			</div>
		</div>
		<div class="grid_2 align_right">
			<div class="page-wrap">
				<a href="/setores" class="button red medium">Lista de Setores da Empresa</a>
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
			<h2 class="cap">Editando Setor da Empresa</h2>
			<div class="content">			
				
			<?php echo $this->Form->create('Setor' , array (
				'url' => array( 
					'controller' => 'setores',
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
				<span>Nome do Setor:</span>
				<?php echo $this->Form->input('nome' , array('type' => 'text', 'class' => 'textbox small', 'value' => $setores['Setor']['nome']) ) ;?>
			</label>
			
			<!-- Numero Field -->
			<label for="numero">
				<span>Descri&ccedil;&atilde;o do Banco</span>
				<?php echo $this->Form->input('descricao' , array('type' => 'text', 'class' => 'textbox', 'value' => $setores['Setor']['descricao']) );?>
			</label>
			
			<?php echo $this->Form->input('id' , array('type' => 'hidden', 'value' => $setores['Setor']['id']) );?>
			
			<!-- Login button with custom CSS classes -->
						
			<?php echo $this->Form->button('Salvar' , array ('class' => 'button medium green float_right') ) ;?>
			<?php echo $this->Form->end() ;?>
			</fieldset>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER -->
<div id="footer" class="container_4">
	<div class="grid_2">Copyright &copy;2012 Socci Manager</div>
	<div class="grid_2 align_right"><a href="#">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Feedback</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Support</a></div>
</div>
<!-- END FOOTER -->

</body>
</html>
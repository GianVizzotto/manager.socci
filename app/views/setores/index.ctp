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
				<a href="/setores/add" class="button red medium">Adicionar Setor da Empresa</a>
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
	
	<div class="grid_4">
		<div class="panel">
			<h2 class="cap">Lista de Setores da Empresa</h2>
			<div class="content">			
				
				<table id="tablesorter-sample" class="tablesorter styled"> 
					<thead> 
						<tr> 
							<th class="checkbox-row"><input type="checkbox" class="checkall" /></th> 
							<th>Nome do Setor</th> 
							<th>Descri&ccedil;&atilde;o do Setor</th> 
							<th class="options-row">Op&ccedil;&otilde;es</th> 
						</tr> 
					</thead> 
					<tbody>
						
						<?php foreach ($setores as $setor) :?>
							
						<tr> 
							<td><input type="checkbox" name="checkbox" /></td> 
							<td><?php echo $setor['Setor']['nome'];?></td> 
							<td><?php echo $setor['Setor']['descricao'];?></td> 
							<td class="center"><a class="icon-button edit" href="/setores/edit/<?php echo $setor['Setor']['id'] ?>">Editar</a><a class="icon-button delete" href="/setores/remove/<?php echo $setor['Setor']['id'] ?>"">Remover</a></td> 
						</tr>
						
						<?php endforeach;?>

					</tbody> 
				</table>
				
				<div id="table-pager-1" class="pager">
					<form>
						<select class="pagesize">
							<option selected="selected" value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>
						</select>
						<a class="button small green first"><img src="/img/table_pager_first.png" alt="First" /></a>
						<a class="button small green prev"><img src="/img/table_pager_previous.png" alt="Previous" /></a>
						<input type="text" class="pagedisplay" disabled="disabled" />
						<a class="button small green next"><img src="/img/table_pager_next.png" alt="Next" /></a>
						<a class="button small green last"><img src="/img/table_pager_last.png" alt="Last" /></a>
					</form>
				</div>
				
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
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
				<a href="/clientes/add" class="button red medium">Adicionar Cliente</a>
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
			<h2 class="cap">Lista de Clientes</h2>
			<div class="content">			
				
				<table id="tablesorter-sample" class="tablesorter styled"> 
					<thead> 
						<tr> 
							<th class="checkbox-row"><input type="checkbox" class="checkall" /></th> 
							<th>Nome do Cliente</th> 
							<th>Telefone do Cliente</th> 
							<th class="options-row">Op&ccedil;&otilde;es</th> 
						</tr> 
					</thead> 
					<tbody>
						
						<?php foreach ($clientes as $cliente) :?>
							
						<tr> 
							<td><input type="checkbox" name="checkbox" /></td> 
							<td><?php echo $cliente['Cliente']['nome_fantasia'];?></td> 
							<td><?php echo $cliente['Cliente']['telefone_1'];?></td> 
							<td class="center"><a class="icon-button edit" href="/clientes/edit/<?php echo $cliente['Cliente']['id'] ?>">Editar</a><a class="icon-button delete" href="/clientes/remove/<?php echo $cliente['Cliente']['id'] ?>"">Remover</a></td> 
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
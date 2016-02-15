<div class="row">
	<div class="col-sm-12">
		<div class="alert alert-info">
			<strong>Info:</strong> 2,500 free elements per day, 100 elements per query, 100 elements per 10 seconds
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open(site_url('diensten/wijkzorg/index'), 'id="form" class="form-inline"'); ?>
					<div class="form-group">
						<label for="jaar">Jaar: </label>
						<?php echo form_dropdown('jaar', $jaren, $datum['jaar'], 'class="form-control" id="jaar"'); ?>
					</div>
					<div class="form-group">
						<label for="maand">Maand: </label>
						<?php echo form_dropdown('maand', $maanden, $datum['maand'], 'class="form-control" id="maand"'); ?>
					</div>
					<?php echo form_hidden('dag', 1); ?>
					<div class="form-group">
						<label for="route">Route: </label>
						<?php echo form_dropdown('route', $routes, '', 'class="form-control" id="route"'); ?>
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#reiskosten_modal">Reiskosten</button>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<ul class="pagination">
			<?php for($i = 1; $i <= $num_days; $i++) : ?>
			<li <?php echo $datum['dag'] == $i ? 'class="active text"' : null; ?>>
				<a href="<?php echo site_url('/diensten/wijkzorg/table/' . $datum['jaar'] . '/' . $datum['maand'] . '/' . $i . '/' . $route); ?>">
					<?php echo $i; ?>
				</a>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-striped table-hover" id="data_table">
			<thead>
				<tr>
					<th>Categorie</th>
					<th>Datum</th>
					<th>Client</th>
					<th>Van</th>
					<th>Tot</th>
					<th>Zorgverlener</th>
					<th>Reiskosten</th>
					<th>Route</th>
					<th>Opmerking</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($diensten as $dienst) :	?>
				<tr>
					<td><?php echo $dienst->categorie; ?></td>
					<td><?php echo $dienst->datum; ?></td>
					<td><?php echo $dienst->client; ?></td>
					<td><?php echo $dienst->van; ?></td>
					<td><?php echo $dienst->tot; ?></td>
					<td><?php echo $dienst->zorgverlener; ?></td>
					<td>€ <?php echo $dienst->reiskosten; ?></td>
					<td><?php echo $dienst->route; ?></td>
					<td><?php echo $dienst->opmerking; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>
						<?php echo form_open(site_url('/diensten/wijkzorg/update_zorgverlener'), 'class="form-inline"'); ?>
						<?php echo form_hidden('jaar', $datum['jaar']); ?>
						<?php echo form_hidden('maand', $datum['maand']); ?>
						<?php echo form_hidden('dag', $datum['dag']); ?>
						<?php echo form_hidden('route', $route); ?>
						<?php echo form_dropdown('zorgverlener', $zorgverleners, $dienst->zorgverlener_id, 'class="form-control"'); ?>
						<button type="submit" name="update" value="1" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></button>
						<?php echo form_close(); ?>
					</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

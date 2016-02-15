<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open('diensten/colabris/exporteer_naar_excel', 'class="form-inline"'); ?>
					<div class="form-group">
						<div class="input-daterange input-group">
							<?php echo form_input('start', set_value('start'), 'class="form-control"  placeholder="Begin datum"'); ?>
							<span class="input-group-addon">t/m</span>
							<?php echo form_input('end', set_value('end'), 'class="form-control"  placeholder="Eind datum"'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="route">Categorie: </label>
						<?php echo form_dropdown('categorie', array(false => 'Alle', 'ZVW' => 'ZVW', 'WLZ' => 'WLZ', 'WMO' => 'WMO'), $this->input->post('categorie'), 'class="form-control"'); ?>
					</div>
					<div class="form-group">
						<label for="route">Per Cliënt: </label>
						<?php echo form_dropdown('client', $this->clienten_m->dropdownClienten(), $this->input->post('client'), 'class="form-control"'); ?>
					</div>
					<button type="submit" name="exporteren" value="1" class="btn btn-default">
						<span class="glyphicon glyphicon-export"></span> Exporteren
					</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

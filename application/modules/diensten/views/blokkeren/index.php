<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open('blokkeren/handle_blokkeren', 'class="form-inline"'); ?>
					<div class="form-group">
						<label for="date">t/m: </label>
						<input type="text" name="date" class="form-control" id="date" placeholder="Datum">
					</div>
					<div class="form-group">
						<label for="route">Categorie: </label>
						<?php echo form_dropdown('categorie', array('alle' => 'Alle', 'P' => 'Particulier', 'T' => 'Thuisondersteuning', 'ZVW' => 'ZVW', 'WLZ' => 'WLZ', 'WMO' => 'WMO'), '', 'class="form-control"'); ?>
					</div>
					<div class="form-group">
						<label for="route">Satus: </label>
						<?php echo form_dropdown('status', array('blokkeren' => 'Blokkeren', 'deblokkeren' => 'Deblokkeren'), '', 'class="form-control"'); ?>
					</div>
					<div class="form-group">
						<label for="route">Per cliënt: </label>
						<?php echo form_dropdown('client', $this->clienten_m->dropdownClienten(), '', 'class="form-control"'); ?>
					</div>
					<button type="submit" name="submit" value="1" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

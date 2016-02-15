<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open(site_url('diensten/aftekenlijsten'), 'class="form-inline"'); ?>
                    <div class="form-group">
                        <div class="input-daterange input-group">
                            <?php echo form_input('start_date', set_value('start_date'), 'class="form-control" placeholder="Begin datum"'); ?>
                            <span class="input-group-addon">t/m</span>
                            <?php echo form_input('end_date', set_value('end_date'), 'class="form-control" placeholder="Eind datum"'); ?>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open(site_url('diensten/aftekenlijsten/detail'),'target="_blank"'); ?>
                <?php echo form_hidden('start_date', set_value('start_date')); ?>
                <?php echo form_hidden('end_date', set_value('end_date')); ?>
                <table id="aftekenlijsten" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliënt</th>
                            <th>Aktie</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="checkAll">  Alles selecteren
                                    </label>
                                </div>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach($clienten as $client): ?>
                        <tr>
                            <td><?php echo form_checkbox('clienten_id[]', $client->client_id, false, 'class="checkbox"'); ?></td>
                            <td><?php echo $client->naam; ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                    <span class="glyphicon glyphicon-arrow-up" style="margin-left: 7px;"></span>
                    Met geselecteerd:
                    <button type="submit" class="btn btn-default">Openen</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

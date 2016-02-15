<?php foreach($clienten_id as $client_id) : ?>
    <div id="page" class="page-break">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th><img src="<?php echo site_url('img/pluto-logo.png'); ?>" style="width: 245px; margin-top: -15px;"></th>
                            <th><h6><?php echo date('d-m-Y', strtotime($start_date)); ?> t/m <?php echo date('d-m-Y', strtotime($end_date)); ?></h6></th>
                            <th><h6>Handtekening cli&euml;nt:</h6></th>
                            <th><h5>...............................</h5></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th colspan="8"><center><?php echo $this->aftekenlijsten_m->getClientNaam($client_id)->client; ?></center></th>
                        </tr>
                        <tr>
                            <th>Datum</th>
                            <th>Van</th>
                            <th>Tot</th>
                            <th>Zorgverlener</th>
                            <th>Van</th>
                            <th>Tot</th>
                            <th>Zorgverlener</th>
                            <th>Paraaf</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $row_count = 1; foreach($this->aftekenlijsten_m->getDiensten($client_id) as $dienst) : ?>
                            <tr>
                                <td><?php echo $dienst->datum; ?></td>
                                <td><?php echo $dienst->van; ?></td>
                                <td><?php echo $dienst->tot; ?></td>
                                <td><?php echo $dienst->zorgverlener; ?></td>
                                <td class="dark-gray" style="padding: 0; vertical-align:bottom;"> [ __ __ : __ __ ]</td>
                                <td class="dark-gray" style="padding: 0; vertical-align:bottom;"> [ __ __ : __ __ ] </td>
                                <td class="dark-gray" style="padding: 0; vertical-align:bottom;"> __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ </td>
                                <td class="dark-gray" style="padding: 0; vertical-align:bottom;"> _______ </td>
                            </tr>
                        <?php $row_count++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Aanvullingen</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Van</th>
                            <th>Tot</th>
                            <th>Zorgverlener</th>
                            <th>Paraaf</th>
                        </tr>
                    </thead>
                    </tbody>
                        <?php for ($i=1; $i <= $this->aftekenlijsten_m->aanvullingen($row_count); $i++) : ?>
                            <tr>
                                <td class="dark-gray"> [ _____ / _____ / __________ ] </td>
                                <td class="dark-gray"> [ __ __ : __ __ ] </td>
                                <td class="dark-gray"> [ __ __ : __ __ ] </td>
                                <td class="dark-gray"> __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ </td>
                                <td class="dark-gray"> _______ </td>
                            </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center><h4>Graag zo spoedig mogelijk terug sturen s.v.p.</h4></center>
            </div>
        </div>
    </div>
<?php endforeach; ?>

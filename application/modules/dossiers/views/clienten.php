<table class="table table-striped table-hover" id="data_table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Voorletters</th>
            <th>Voorvoegsel</th>
            <th>Achternaam</th>
            <th>Adres</th>
            <th>Huisnummer</th>
            <th>Postcode</th>
            <th>Woonplaats</th>
            <th>Aktie</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clienten as $client) : ?>
            <tr>
                <td><?php echo $client->id; ?></td>
                <td><?php echo $client->titel; ?></td>
                <td><?php echo $client->voorletters; ?></td>
                <td><?php echo $client->voorvoegsel; ?></td>
                <td><?php echo $client->achternaam; ?></td>
                <td><?php echo $client->adres; ?></td>
                <td><?php echo $client->huisnummer; ?></td>
                <td><?php echo $client->postcode; ?></td>
                <td><?php echo $client->woonplaats; ?></td>
                <td>
                    <a href="<?php echo site_url('/dossiers/client/' . $client->id); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p><?php echo anchor('#', 'Nieuwe cli&euml;nt aanmaken', 'class="btn btn-default"')?></p>

<?php for ($numTable = 1; $numTable <= $data['nbtables']; $numTable++) : ?>
    <tr>
        <th scope="row"><?= $numTable ?></th>
        <?php for ($numValeur = 1; $numValeur <= $data['nbvaleurs']; $numValeur++) : ?>
            <td><?= $numValeur ?> * <?= $numTable ?> = <?= $numValeur * $numTable ?></td>
        <?php endfor ?>
    </tr>
<?php endfor ?>
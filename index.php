<?php
require('./phpfiles/validation.php');

if (isset($_GET['nbtables'], $_GET['nbvaleurs'])) {
    $old = $_GET;
    $data = validated();
}


?>
<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="utf-8">
    <title>Les tables de multiplication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Les tables de multiplication</h1>
        <section>
            <h2>Indiquez quelles tables vous souhaitez</h2>
            <form action="index.php" method="get">
                <div class="form-group">
                    <label class="control-label" for="nbtables">Nombre de tables : </label>
                    <input class="form-control" id="nbtables" type="text" name="nbtables" value="<?= $data['nbtables'] ?? 0 ?>">
                </div>
                <div class="form-group">
                    <label class="control-label" for="nbvaleurs">Nombre de valeurs : </label>
                    <input class="form-control" id="nbvaleurs" type="text" name="nbvaleurs" value="<?= $data['nbvaleurs'] ?? 0 ?>">
                </div>
                <input type="submit">
            </form>
        </section>
        <?php if (isset($data['error'])) : ?>
            <p style="color:red"><?= $data['error'] ?></p>
        <?php elseif (isset($_GET['nbtables'], $_GET['nbvaleurs'])) : ?>
            <section>
                <h2>Voici vos tables</h2>
                <table class="table table-striped table-bordered">
                    <caption>Les <?= $data['nbvaleurs'] ?> premières valeurs des <?= $data['nbtables'] ?> premières tables</caption>
                    <!-- Première ligne -->
                    <tr>
                        <th class="vide">&nbsp;</th>
                        <?php for ($valuehead = 1; $valuehead <= $data['nbvaleurs']; $valuehead++) : ?>
                            <th scope="col"><?= $valuehead ?></th>
                        <?php endfor ?>
                    </tr>
                    <!-- contenu du tableau -->
                    <?php require './phpfiles/tablecontent.php' ?>
                </table>
            </section>
        <?php endif ?>
    </main>
</body>

</html>
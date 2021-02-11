<?php
function validated(): array
{
    //TODO: Si l'user rentre 2.2 ? arrondir et montrer le résultat en int ? ? ou bien error ?
    if (!is_numeric($_GET['nbtables']) && !is_numeric($_GET['nbvaleurs'])) {
        return ['error' => 'Les deux valeurs ne sont pas des nombres.'];
    } else if (!is_numeric($_GET['nbtables'])) {
        return ['error' => 'Le nombre de table doit être une valeur numérique.'];
    } else if (!is_numeric($_GET['nbvaleurs'])) {
        return ['error' => 'Le nombre de valeurs doit être une valeur numérique.'];
    } else if ((float)$_GET['nbtables'] === 0.0 && (float)$_GET['nbvaleurs'] === 0.0) {
        return ['error' => 'Entrez un nombre supérieur à 0.'];
    } else if ((float)$_GET['nbtables'] === 0.0) {
        return ['error' => 'Entrez un nombre de table supérieur à 0.'];
    } else if ((float)$_GET['nbvaleurs'] === 0.0) {
        return ['error' => 'Entrez un nombre de valeur supérieur à 0.'];
    }
    $nbtables = (float)$_GET['nbtables'];
    $nbvaleurs = (float)$_GET['nbvaleurs'];
    return compact('nbtables', 'nbvaleurs');
}

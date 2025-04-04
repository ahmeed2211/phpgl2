<?php
require_once 'Etudiant.php';
$etudiants = [
    new Etudiant("Aymen", [11,13,18,7,10,13,2,5,1]),
    new Etudiant("Skander", [15,9,8,16])
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes & Moyenness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="p-4">
<div class="container text-center">
    <div class="row row-cols-2">
        <?php foreach ($etudiants as $e): ?>
        <div class="col">
            <h4><?= $e->getNom() ?></h4>
            <?php foreach ($e->getNotes() as $n): ?>
                <?php
                $c = $n < 10 ? 'alert-danger' : ($n == 10 ? 'alert-warning' : 'alert-success');
                ?>
                <div class="alert <?= $c ?>  w-100"><?= $n ?></div>
            <?php endforeach; ?>
            <p class="alert alert-primary" role="alert">Votre moyenne est <?= $e->moyenne() ?></p>
        </div>
        <?php endforeach; ?>

    </div>
</div>


</body>

</html>

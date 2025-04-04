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
</head>

<body class="p-4">

<?php foreach ($etudiants as $e): ?>
    <h4><?= $e->getNom() ?></h4>
    <?php foreach ($e->getNotes() as $n): ?>
        <?php
        $c = $n < 10 ? 'bg-danger' : ($n == 10 ? 'bg-orange' : 'bg-success');
        ?>
        <span class="note <?= $c ?>"><?= $n ?></span>
    <?php endforeach; ?>
    <p class="">Votre moyenne est <?= $e->moyenne() ?> </p>
    <hr>
<?php endforeach; ?>

</body>

</html>

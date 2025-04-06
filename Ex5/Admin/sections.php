<?php
$pageTitle = "Liste des etudiants";
include '../fragments/header.php';
include '../fragments/navbar.php';

?>

    <div class="alert alert-light" role="alert">
        Liste des sections
    </div>

<?php
include "../fragments/sectionsdatatable.php" ?>


<?php include '../fragments/footer.php' ?>
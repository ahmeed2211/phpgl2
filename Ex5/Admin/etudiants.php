<?php
$pageTitle = "Liste des etudiants";
include '../fragments/header.php';


//$searchTerm = $_GET['search'] ?? '';
//
//try {
//    $db = new PDO("mysql:host=localhost;dbname=tpphp", "root", "houssem");
//
//    if (!empty($searchTerm)) {
//        $query = $db->prepare("SELECT * FROM Etudiant WHERE name LIKE :name");
//        $query->execute(['name' => '%' . $searchTerm . '%']);
//    } else {
//        $query = $db->query("SELECT * FROM Etudiant");
//    }
//
//    $students = $query->fetchAll(PDO::FETCH_ASSOC);
//} catch (PDOException $e) {
//    die("Erreur: " . $e->getMessage());
//}

?>

    <div class="alert alert-light" role="alert">
        Liste des étudiants
    </div>

<?php include "../fragments/datatable.php" ?>


<?php include '../fragments/footer.php' ?>
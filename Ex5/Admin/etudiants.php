<?php
$pageTitle = "Liste des etudiants";
include '../fragments/header.php';
include '../fragments/navbar.php';

$searchTerm = $_GET['search'] ?? '';

try {
    $db = new PDO("mysql:host=localhost;dbname=tpphp", "root", "houssem");

    if (!empty($searchTerm)) {
        $stmt = $db->prepare("SELECT * FROM Etudiant WHERE name LIKE :search");
        $stmt->execute(['search' => "%$searchTerm%"]);
    } else {
        $stmt = $db->query("SELECT * FROM Etudiant");
    }

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
?>

<div class="alert alert-light" role="alert">
    Liste des étudiants
</div>

<?php include "../fragments/admindatatable.php" ?>
<?php include '../fragments/footer.php' ?>

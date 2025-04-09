<?php
$base= new PDO("mysql:host=localhost;dbname=tpphp","root","houssem");
echo "connection okay";
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$studentId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$req = $base->prepare("DELETE FROM Etudiant WHERE id = :id");
$req->bindParam(":id", $studentId, PDO::PARAM_INT);
$req->execute();
header("Location:../Admin/etudiants.php");
?>


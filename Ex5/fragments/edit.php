<?php

$base= new PDO("mysql:host=localhost;dbname=tpphp","root","houssem");
echo "connection okay";
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$studentId = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$name = isset($_POST['name']) ? $_POST['name'] : '';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$section = isset($_POST['section']) ? $_POST['section'] : '';
$req = $base->prepare("UPDATE Etudiant SET name = :name, birthday = :birthday, section = :section WHERE id = :id");
$req->bindParam(":name", $name, PDO::PARAM_STR);
$req->bindParam(":birthday", $birthday, PDO::PARAM_STR);
$req->bindParam(":section", $section, PDO::PARAM_STR);
$req->bindParam(":id", $studentId, PDO::PARAM_INT);
$req->execute();
header("Location:../Admin/etudiants.php");
?>
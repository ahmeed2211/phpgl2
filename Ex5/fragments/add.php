<?php

$base= new PDO("mysql:host=localhost;dbname=tpphp","root","houssem");
echo "connection okay";
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$name = isset($_POST['name']) ? $_POST['name'] : '';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$section = isset($_POST['section']) ? $_POST['section'] : '';
$image_url = isset($_POST['image_url']) ? $_POST['image_url'] : '';
$req = $base->prepare("INSERT INTO Etudiant (name, birthday, section, image_url) VALUES (:name, :birthday, :section, :image_url)");
$req->bindParam(":name", $name, PDO::PARAM_STR);
$req->bindParam(":birthday", $birthday, PDO::PARAM_STR);
$req->bindParam(":section", $section, PDO::PARAM_STR);
$req->bindParam(":image_url", $image_url, PDO::PARAM_STR);
$req->execute();
header("Location:../Admin/etudiants.php");
?>
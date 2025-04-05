<?php
$base= new PDO("mysql:host=localhost;dbname=tpphp","root","password");
echo "connection okay";
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$studentId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$req = $base->prepare("SELECT * FROM Student WHERE id = :id");
$req->bindParam(":id", $studentId, PDO::PARAM_INT);
$req->execute();
$reponse = $req->fetchAll(PDO::FETCH_ASSOC);
var_dump($reponse); 
echo "okayy";
if (!$reponse) {
    echo "Aucun étudiant trouvé avec cet ID.";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de L'etudiant <?php echo $reponse[0]['name']; ?></title>
    <h1> nom : <?php echo $reponse[0]['name'] ;?></h1>
    <h2> date de naissance : <?php echo $reponse[0]['datenaissance'] ;?></h2>
    <h2> filiere : <?php echo "GL";?></h2>
</head>
<body>
    
</body>
</html>


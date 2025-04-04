<?php
include_once "SessionManager.php";
if (isset($_POST['reset'])) {
    session_start();
    $_SESSION['nbvisites'] = 0;
    $visites = 0;}
else {
    $session = new SessionManager();
    $visites = $session->getNbVisites();}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SessionManager</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <style>
        h1{
            color: blue;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        p{
            color: black;
            text-align : center;
        }
        form{
            text-align: center;
        }
        </style>
    <?php
    if ($visites==1){
        echo "<p>Bienvenue sur notre site !</p>";
    } else {
        echo "<p>Vous avez visité cette page $visites fois.</p>";
    }
    ?>
    <form method="POST">
        <input type="submit" name="reset" value="Réinitialiser le compteur">
</body>
</html>

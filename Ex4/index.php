<?php 
try{
    $base= new PDO("mysql:host=localhost;dbname=tpphp","root",'password');
    echo "connection successful";
    $query = $base->query("SELECT * FROM Student");
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
<div class="container mt-4">
        <h1>liste des Etudiants</h1>
        <style>
            body{
                background-color:beige;
                font-family: Arial, sans-serif;
            }
            th{
                color: red ;
                text-align: center;
                font-family: Arial, sans-serif;
            }
            h1{
                color: blue;
                text-align: center;
                font-family: italic;
            }
        </style>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID  </th>
                    <th>Nom </th>
                    <th>Date de Naissance  </th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" .$student['id']. "</td>";
                    echo "<td>" .$student['name'] . "</td>";
                    echo "<td>" .$student['datenaissance'] . "</td>";
                    echo "<td><a href='detailEtudiant.php?id=" .$student['id']. "'>Details</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

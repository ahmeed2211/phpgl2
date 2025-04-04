<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 1</title>
</head>
<body>
    <form action="exercice1.php" method="POST">
         <input type="text" name="nom" id="nom">Entrez votre nom</input><br>
         <input type="text" name=nbnote id="nbnote">Entrez le nombre de notes</input><br>
         <input type="submit" value="Submit">
<?php
    if(isset($_POST['nom']) && isset($_POST['nbnote'])){
        $etudiant = new Etudiant();
        $etudiant->afficher();
    }

class Etudiant{
    public $nom;

    public $notes;

    public function __construct(){

        $this->nom= $_POST['nom'];
        for($i=0; $i<$_POST['nbnote']; $i++){
            echo "<br>enter note :";
            echo "<input type='text' name='note[]' id='note'>"; 
            echo "<br>";
            $this->notes[$i] = $_POST['note'][$i];
        }
        echo "<input type='submit' value='Submit notes'>";
}
    public function afficher(){
        echo "
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }</style>
            <table>
            <tr>
                <th>{$this->nom}</th>";
        
            for ($i = 0; $i < count($this->notes); $i++) {
                    echo "<td>{$this->notes[$i]}</td>";
                }
            
            echo "</tr>";

    }}
?>
    </form>
</body>
</html>


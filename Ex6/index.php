<?php
include_once("classRepository.php");
include_once("user.php");
include_once("section.php");
$base = new PDO("mysql:host=localhost;dbname=tpphp", "root", 'password');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnalités sur les bases de données</title>
</head>
<body>
    <form method="get" action="index.php">
        <div>
            Choisir la base :
            <select name="table" id="table">
                <option value="user">User</option>
                <option value="section">Section</option>
            </select>
        </div><br>

        <div>
            Choisir la fonctionnalité :
            <select name="action" id="action" onchange="showid()">
                <option value="create">Create</option>
                <option value="delete">Delete</option>
                <option value="findAll">Find All</option>
                <option value="findById">Find By Id</option>
            </select>
        </div>

        <div id="input-container"></div>

        <script>
            function showid() {
                const action = document.getElementById("action").value;
                const container = document.getElementById("input-container");

                container.innerHTML = "";

                if (action === "findById" || action === "delete") {
                    const idInput = document.createElement("input");
                    idInput.type = "number";
                    idInput.name = "id";
                    idInput.placeholder = "Enter ID";
                    idInput.id = "id";
                    container.appendChild(idInput);
                }
            }
        </script>

        <button type="submit">Valider le choix</button>
    </form>

    <hr>

    <?php
    if (isset($_GET["table"]) && isset($_GET["action"])) {
        $table = $_GET["table"];
        $action = $_GET["action"];
        $id = $_GET["id"] ?? null;

        $va = ($table === "user") ? new UserRepository() : new SectionRepository();

        echo "<hr>Résultat :<br>";

        if ($action === "create") {
            echo "
            <form method='post'>
                <input type='text' name='username' placeholder='username' required>
                <input type='email' name='email' placeholder='email' required>
                <input type='text' name='role' placeholder='role' required>
                <button type='submit' name='createSubmit'>Create</button>
            </form>
            ";

            if (isset($_POST['createSubmit'])) {
                $arrayuser = [
                    'username' => $_POST["username"],
                    'email' => $_POST["email"],
                    'role' => $_POST["role"]
                ];
                echo "the user has been created successfully";
            }

        } elseif ($action === "delete" && $id) {
            var_dump($_GET);
            $va->delete($id);
            echo "Entrée supprimée avec succès.";

        } elseif ($action === "findAll") {
            $resultat = $va->findAll();
            foreach ($resultat as $row) {
                foreach ($row as $key => $value) {
                    echo "$key : $value <br>";
                }
                echo "<hr>";
            }

        } elseif ($action === "findById" && $id) {
            $resultat = $va->findById($id);
            if ($resultat) {
                foreach ($resultat as $key => $value) {
                    echo "$key : $value <br>";
                }
            } else {
                echo "Aucune entrée trouvée avec cet ID.";
            }
        }
    }
    ?>
</body>
</html>

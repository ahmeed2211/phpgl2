<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=tpphp", "root", "houssem");
    $query = $db->query("SELECT * FROM Etudiant");
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <!-- jQuery & DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <style>
        .student-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
    </style>
</head>
<body class="p-4">

<div class="container">

    <div class="container mb-3">
        <form method="get" class="d-flex gap-2 mb-3">
            <input type="text" name="search" class=" w-20" placeholder="Veillez renseigner votre" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
            <button type="submit" class="btn btn-danger" >Filtrer</button>
            <i class="bi bi-person-plus-fill"></i>
        </form>
    </div>



    <table id="studentTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>Section</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><img src="<?= htmlspecialchars($student['image_url']) ?>" class="student-img" alt="photo"></td>
                <td><?= htmlspecialchars($student['name']) ?></td>
                <td><?= $student['birthday'] ?></td>
                <td><?= htmlspecialchars($student['section']) ?></td>
                <td><a href='../fragments/detailEtudiant.php?id=<?= $student['id'] ?>'><i class="bi bi-info-circle-fill"></i></a>
                    <a href='../fragments/delete.php?id=<?= $student['id'] ?>'><i class="bi bi-eraser"></i></a>
                    <i class="bi bi-pencil-square"></i> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#studentTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf']
        });
    });
</script>

</body>
</html>

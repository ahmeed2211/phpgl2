<?php
$pageTitle = "Edit";
include 'header.php';
$studentId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
?>


    <form method="post" action="add.php?id=<?= $studentId ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" >
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="text" class="form-control" name="birthday" id="birthday" >
        </div>
        <div class="mb-3">
            <label for="section" class="form-label">Section</label>
            <input type="text" class="form-control" name="section" id="section">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" name="image_url" id="image_url">
        </div>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>


<?php if (isset($_GET['errorMessage'])) { ?>
    <div class="alert alert-danger">
        <?= $_GET['errorMessage'] ?>
    </div>
<?php } ?>


<?php include 'footer.php' ?>
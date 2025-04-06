<?php
$pageTitle = "Authentification";
include 'fragments/header.php';

?>


    <form method="post" action="processLogin.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" name="id" id="id" >
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" name="role" id="role">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>


<?php if (isset($_GET['errorMessage'])) { ?>
    <div class="alert alert-danger">
        <?= $_GET['errorMessage'] ?>
    </div>
<?php } ?>


<?php include 'fragments/footer.php' ?>
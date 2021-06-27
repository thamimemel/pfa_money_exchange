<?php
session_start();
require_once "../utils/auth.php";

// Auth bank
if (! is_auth_bank()) {
    header("Location: ./login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bank</title>
  </head>
  <body>
    <?php require_once "../static/bank_nav.php" ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-center flex-column">
            <a href="./offers.php" class="btn btn-primary">Offres</a>
            <a href="./add_agency.php" class="btn btn-primary mt-1">Ajouter Agence</a>
            <a href="./manage_agencies.php" class="btn btn-primary mt-1">Gerer Agences</a>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
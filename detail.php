<?php
if (
    !isset($_GET["nim"]) ||  !isset($_GET["nama"]) ||  !isset($_GET["jurusan"]) ||  !isset($_GET["email"]) ||  !isset($_GET["nilai"]) ||  !isset($_GET["grade"]) ||  !isset($_GET["status"]) ){

    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>

</head>
<body class="p-3 mb-2 bg-body-secondary">
    <div class="container bg-white my-5 p-5 rounded shadow" style="max-width: 740px;">
    <h3>Detail Mahasiswa</h3>
    <ul class="list-unstyled">
        <li class="bg-light p-3 mb-2 rounded"><b>NIM :</b> <?= $_GET["nim"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Nama :</b> <?= $_GET["nama"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Jurusan :</b> <?= $_GET["jurusan"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Email :</b> <?= $_GET["email"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Nilai :</b> <?= $_GET["nilai"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Grade :</b> <?= $_GET["grade"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Status :</b> <?= $_GET["status"]?> </li>
    </ul>
    <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>

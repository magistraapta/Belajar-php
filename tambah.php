<?php 
require 'koneksi.php';


if(isset($_POST["submit"])){
   if (tambah($_POST) > 0){
    echo "<script>
    document.location.href = 'index.php';
    </script>";
   } else {
    echo 'data gagal ditambahkan';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container col-7 w-7/12 mt-5 ">
        <div>
            <h1>Masukkan data terbaru</h1>
        </div>
    <form class="" method="post">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" required >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required >
        </div>
        <!-- <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
        </div> -->
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="cancel" class="btn btn-danger"><a href="index.php" class=" text-white text-decoration-none">Cancel</a></button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
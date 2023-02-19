<?php 
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM admin");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
	<div class="container mt-5">
		<div class="row">
			<h1>Fetch data dari MYSQL</h1>
		</div>
		<table class="table">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Username</th>
				<th scope="col">Password</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php $i = 1; ?>
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<tr>
				<th scope="row"><?php echo $i++; ?></th>
				<td><?php echo $row["username"] ?></td>
				<td><?php echo $row["password"] ?></td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
			<button type="button" class="btn btn-primary">Tambah data</button>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>E-Laundry</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
	<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand text-light" href="#">E-Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        </div>
    </div>
    </nav>

	<div class="container">
		<a href="customer_view.php" class="btn btn-primary mt-5">Kembali</a>
		<br/>
		<br/>
		<h3 class="mb-3">Tambah Data Customer</h3>
			<form method="post" action="add_action.php">
				<table>
					<tr>			
						<td class="form-label">Nama</td>
						<td><input type="text" name="nama" class="form-control"></td>
					</tr>
					<tr>
						<td class="form-label">Alamat</td>
						<td><input type="text" name="alamat" class="form-control"></td>
					</tr>
					<tr>
						<td class="form-label">Username</td>
						<td><input type="text" name="username" class="form-control"></td>
					</tr>
					<tr>
						<td class="form-label">Password</td>
						<td><input type="password" name="password" class="form-control"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN" class
						="btn btn-success mt-2"></td>
					</tr>		
				</table>
			</form>
		</div>
</body>
</html>

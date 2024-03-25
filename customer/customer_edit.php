<!DOCTYPE html>
<html>
<head>
	<title>E-Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Kelola Data Customer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            </div>
        </div>
    </nav>

    <?php 
    include '../koneksi.php';
    // Membuat objek Database
    $db = new Database();
    // Mendapatkan koneksi database
    $koneksi = $db->getConnection();
    ?>

    <div class="container mt-5">
	<br/>
	<a href="customer_view.php" class="btn btn-primary">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Customer</h3>
   
 
	<?php
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from customer where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form method="post" action="update_action.php">
			<table>
                <div class="mb-3">
                    <tr>			
                        <td class="form-label">Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>" class="form-control">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control">
                        </td>
                    </tr>
                </div>
                <div class="mb-3">
                    <tr>
                        <td class="form-label">Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" class="form-control"></td>
                    </tr>
                </div>
                <div class="mb-3">
                    <tr>
                        <td class="form-label">Username</td>
                        <td><input type="text" name="username" value="<?php echo $d['username']; ?>" class="form-control"></td>
                    </tr>
                </div>
                <div class="mb-3">
                    <tr>
                        <td class="form-label">Password</td>
                        <td><input type="password" name="password" value="<?php echo $d['password']; ?>" class="form-control"></td>
                    </tr>
                </div>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn-success mt-2"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
     </div>
</body>
</html>
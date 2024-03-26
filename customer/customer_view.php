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
    $db = new \Connection\Database();
    // Mendapatkan koneksi database
    $koneksi = $db->getConnection();
    ?>

    <div class="container mt-5">
	<h2>Data Customer</h2>
	<br/>
	<a href="customer_add.php" class="btn btn-primary">+ Tambah Customer</a>
	<a href="../index.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
	<br/>
	<br/>
	<table class="table table-striped table-hover text-center">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Username</th>
			<th>OPSI</th>
		</tr>
		<?php 
		$no = 1;
		$data = mysqli_query($koneksi,"select * from customer");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td>
					<a href="customer_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pencil"></i> Edit</a>
					<a href="customer_delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fb97ee2ace.js" crossorigin="anonymous"></script>
</body>
</html>
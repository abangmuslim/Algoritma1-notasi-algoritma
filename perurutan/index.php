<html>

<body>
	<h1>Identifikasi pengguna</h1>
	<form method="GET" action="input.php">
		Input Nama <br>
		<input type="text" name="nama" required><br>
		Input Email <br>
		<input type="text" name="email" required><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if ($_GET) {
		echo 'Nama: ' . $_GET['nama'];
		echo '<br>';
		echo 'Email: ' . $_GET['email'];
		$_GET['status'] = 'aktif';
	}

	?>
</body>

</html>
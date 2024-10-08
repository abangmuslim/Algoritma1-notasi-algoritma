<html>

<body>
	<h1>Identifikasi pengguna (login)</h1><br><br>
	<form method="GET" action="input.php">
		Input Nama  :
		<input type="text" name="nama" required><br><br>
		Input Email  :
		<input type="text" name="email" required><br><br>
		<input type="submit" name="submit" value="Login">
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
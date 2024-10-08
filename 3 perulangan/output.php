<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>hasil perulangan</title>
</head>
<body>
<h1> Hasil Perulangan sebanyak <?php echo $_POST['jumlah'];?> kali</h1>

</body>
</html>
<?php

$jumlah = $_POST['jumlah'];

// Perulangan untuk menampilkan "Nama saya Ahmadi"
for ($i = 1; $i <= $jumlah; $i++) {
      echo "Nama saya Ahmadi ke " . $i . "<br>";
}
?>

<p>
      <a href="input.php">
            <button>Kembali ke Input</button>
      </a>
</p>

<p>atau kembali ke : 
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
</p>
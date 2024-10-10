<?php

// Ambil nilai dari form
$jumlahsegi = $_POST['jumlahsegi'];


if ($jumlahsegi = 3) {
      $jumlahsegi = 'segitiga';
}

if ($jumlahsegi = 4) {
      $jumlahsegi = 'segi4';
} else {
      echo "segi 5";
}

// Menampilkan hasil
echo
"
<h1>Menentukan jenis segitiga</h1>
<p>berdasarkan jumlah segi yang di input : $jumlahsegi</p>
<h2>maka segitiga tersebut adalah segitiga $jumlahsegi</h2>
";
?>

<p>
<a href="input.php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
<?php

// Ambil nilai dari form
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$angka3 = $_POST['angka3'];

// Menentukan bilangan terbesar
$terbesar = $angka1; // Anggap angka1 yang terbesar

if ($angka2 > $terbesar) {
      $terbesar = $angka2;
}

if ($angka3 > $terbesar) {
      $terbesar = $angka3;
}

// Menampilkan hasil
echo
"
<h1>Program Hitung nilai terbesar (Max)</h1>
<p>Dari Bilangan : $angka1, $angka2, dan $angka3</p>
<p>Bilangan yang terbesar adalah $terbesar</p>
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
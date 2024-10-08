<?php


$jarak = $_POST["jarak"];
$cepat = $_POST["cepat"];
$waktu = $jarak / $cepat;

echo

"

<h1>Program Hitung Waktu Tempuh</h1>
<p>Jarak : <b>$jarak</b> km</p>
<p>Kecepatan : <b>$cepat</b> km/jam</p>

<h3>Waktu Tempuh : $waktu jam</h3>

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
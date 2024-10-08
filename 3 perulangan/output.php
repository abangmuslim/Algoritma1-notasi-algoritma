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
</p>
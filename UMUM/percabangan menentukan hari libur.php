<?php
// Mendefinisikan hari libur nasional (misalnya)
$libur_nasional = array ("2024-01-01", "2024-08-17", "2024-12-25", "2024-08-13");

// Mendapatkan tanggal hari ini
$tanggal_hari_ini = date("Y-m-d");

echo "Hari ini adalah tanggal : " . $tanggal_hari_ini;
echo "<br>";
// Mengecek apakah hari ini adalah hari libur nasional
if (in_array($tanggal_hari_ini, $libur_nasional)) {
    echo "Hari ini adalah hari libur!";
} else {
    echo "Hari ini bukan hari libur.";
}

?>
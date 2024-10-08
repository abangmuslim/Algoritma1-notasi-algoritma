<?php
// Mendefinisikan hari libur nasional (misalnya)
$libur_nasional = array ("2024-01-01", "2024-08-17", "2024-12-25", "2024-08-14");

// Mendapatkan tanggal hari ini
$tanggal_hari_ini = date("Y-m-d");

echo "Hari ini adalah tanggal : " . $tanggal_hari_ini;
echo "<br> <hr>";
// Mengecek apakah hari ini adalah hari libur nasional

echo "<br> (dengan !)";
echo "<br>";

$kerja=(in_array($tanggal_hari_ini, $libur_nasional));
if (!$kerja) {
    echo "Hari ini adalah hari kerja!";
} else {
    echo "Selamat Ea Hari ini adalah hari libur.....";
}


echo "<br> <br>(dengan isset)";
echo "<br>";
$kerja=(in_array($tanggal_hari_ini, $libur_nasional));
if (isset($kerja)) {
    echo "Hari ini adalah hari kerja!";
} else {
    echo "Selamat Ea Hari ini adalah hari libur.....";
}


echo "<br> <br> (dengan is_null)";
echo "<br>";
$kerja=(in_array($tanggal_hari_ini, $libur_nasional));
if (is_null($kerja)) {
    echo "Hari ini adalah hari kerja!";
} else {
    echo "Selamat Ea Hari ini adalah hari libur.....";
}

echo "<br> <br>(dengan if biasa)";
echo "<br>";

if (!in_array($tanggal_hari_ini, $libur_nasional)){
    echo "Hari ini adalah hari kerja!";
} else {
    echo "Selamat Ea Hari ini adalah hari libur.....";
}


?>
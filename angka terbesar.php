<?php

// Mulai // Masukkan angka1 // Masukkan angka2 // Masukkan angka3 
$angka1=9;
$angka2=5;
$angka3=10;
// terbesar <- angka1 
$terbesar=$angka1;
// Jika angka1 > terbesar, maka // terbesar <- angka1 
if ($angka1>$terbesar)
{
    $terbesar=$angka1;
} 
// Jika angka2 > terbesar // terbesar <- angka2 
else if ($angka2>$terbesar)
{
$terbesar=$angka2;
}
// Tapi jika tidak, maka // terbesar <- angka3 
else 
$terbesar=$angka3;  
    
// Angka terbesar ditemukan adalah terbesar 

echo "dari 3 angka berikut,";
echo "<br>angka1 = " . $angka1;
echo "<br>angka2 = " . $angka2;
echo "<br>angka3 = " . $angka3;
echo "<br>angka terbesar adalah = " .$terbesar;

// Selesai
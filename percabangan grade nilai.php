<?php



// Algoritma untuk menentukan grade nilai

// 1. Terima input nilai dari pengguna
$nilai = 85; // Contoh nilai

// 2. Tentukan grade berdasarkan nilai
if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai < 90) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai < 80) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai < 70) {
    $grade = "D";
} else {
    $grade = "E";
}

// 3. Tampilkan grade ke pengguna
echo "Nilai: $nilai, Grade: $grade";
echo "<br>Nama : Jihan";
?>
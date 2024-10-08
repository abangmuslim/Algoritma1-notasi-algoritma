<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan While dengan Method GET</title>
</head>
<body>
<h1>Menerapkan Perulangan dengan Statemen tertentu</h1>
<form method="GET" action="">
    <label for="angka">Masukkan statement:</label>
    <input type="text" id="Text" name="Text" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];
    $i = 1;
    
    echo "<h3>Perulangan dari 1 hingga $angka:</h3>";
    
    while ($i <= $angka) {
        echo $i . "<br>";
        $i++;
    }
}
?>

</body>
</html>
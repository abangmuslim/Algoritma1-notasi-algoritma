

<!DOCTYPE html>
<html>

<head>
    <title>Percabangan Angka terbesar</title>
</head>

<body>

    <form action="" method="post">
        <h1>Percabangan Angka Terbesar: </h1><br>
        <input type="text" name="angka1"><br>
        Angka1: <br>
        <input type="text" name="angka2"><br>Angka 2<br>
        <input type="text" name="angka3"><br>Angka 3<br>
        <input type="submit" value="Nilai Terbesar">
    </form>

</body>

</html>

<?php
if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['angka3'])) {

    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];

   
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
}


var_dump($terbesar);

die;
echo "dari 3 angka berikut,";
echo "<br>angka1 = " . $angka1;
echo "<br>angka2 = " . $angka2;
echo "<br>angka3 = " . $angka3;
echo "<br>angka terbesar adalah = " .$terbesar;
echo "<br><br><strong>By : Ahmadi Muslim<strong>";
?>
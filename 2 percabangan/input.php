<!DOCTYPE html>

<html>

<head>

    <title>WAKTU TEMPUH</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <table>
    <th>
    <td>
        <tr>Anda Login Sebagai :</tr>
    </td>
    </th>
    <tbody>
        <td>
            <tr>
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>


            </tr>
        </td>
    </tbody>
</table>



    <form action="output.php" method="post">
<html>
<head>
    <title>Menentukan Bilangan Terbesar Dari 3 BIlangan</title>
</head>
<body>
    <h2>Masukkan Tiga Bilangan</h2>
    <form action="output.php" method="post">
        <label for="angka1">Bilangan 1:</label>
        <input type="number" id="angka1" name="angka1" required><br><br>

        <label for="angka2">Bilangan 2:</label>
        <input type="number" id="angka2" name="angka2" required><br><br>

        <label for="angka3">Bilangan 3:</label>
        <input type="number" id="angka3" name="angka3" required><br><br>

        <input type="submit" value="Tentukan Terbesar">
    </form>
</body>
</html>

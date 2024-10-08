<!DOCTYPE html>

<html>

<head>

    <title>WAKTU TEMPUH</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Perurutan Notasi Algoritma </h4>
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
        <h1>Program Hitung Waktu Tempuh</h1><br><br>

        Jarak Tempuh (km) :
        <input type="text" name="jarak" required><br><br>

        Kecepatan (km/jam):
        <input type="text" name="cepat" required><br><br>


        <input type="submit" value="Hitung Waktu Tempuhnya">
    </form>

</body>

</html>
<!DOCTYPE html>

<html>

<head>

    <title>WAKTU TEMPUH</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Perulangan Notasi Algoritma </h4>
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
        <h1> Project Perulangan dengan Model Jumlah Select customisasi</h1>
<html>

<head>
    <title>Perulangan</title>
</head>

<body>
    <form method="POST" action="output.php">
        <label for="jumlah">Pilih berapa kali akan diulang:</label><br><br>
        <select id="jumlah" name="jumlah" min="1" required>
            <!-- Loop jumlah 1 sampai 100 -->
            <!-- Kamu juga bisa menggunakan script untuk mengisi jumlah secara otomatis -->
            <option value=""> --- Pilih Jumlah ---</option>
            <!-- Pilihan jumlah dari 1 hingga 100 -->
            <script>
                for (let i = 1; i <= 100; i++) {
                    document.write('<option value="' + i + '">' + i + '</option>');
                }
            </script>
        </select>
        <input type="submit" value="Proses ->">
    </form>


</body>

</html>
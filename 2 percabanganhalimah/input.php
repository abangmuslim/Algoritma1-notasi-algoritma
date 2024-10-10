<!DOCTYPE html>

<html>

<head>

    <title>WAKTU TEMPUH</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <p>Anda Login Sebagai : <?php if ($_GET) {
                                echo $_GET['nama'];
                                echo '  Dengan Email: ' . $_GET['email'];
                                $_GET['status'] = 'aktif';
                            }

                            ?></p>

    <form action="output.php" method="post">
        <html>

        <head>
            <title>Menentukan Bilangan Terbesar Dari 3 BIlangan</title>
        </head>

        <body>
            <h2>Masukkan jumlah segi</h2>
            <form action="output.php" method="post">
                <label for="jumlahsegi">Jumlah Segi:</label>
                <input type="number" id="jumlahsegi" name="jumlahsegi" required><br><br>               
                <input type="submit" value="Tentukan Terbesar">
            </form>
        </body>

        </html>
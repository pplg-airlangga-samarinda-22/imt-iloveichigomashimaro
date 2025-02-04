<html lang="en">
<head>
    <title>Cek Umur</title>
</head>
<body>
    <div>
        <h2>Cek Umur Anda</h2>
        <form method="POST">
            <label for="umur">Masukkan Umur</label>
            <input type="number" name="umur" id="umur" required> <br>
            <label for="nama">Masukkan Nama</label>
            <input name="nama" id="nama" required> <br>
            <input value="Cek Umur" type="submit">
        </form>
        <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $umur = $_POST["umur"];
                $nama = $_POST["nama"];

                if ($umur < 12) {
                    $umur = 'Anda Masih Anak-anak';
                    echo "$nama, $umur <br/>";
                } else if ($umur < 19) {
                    $umur = 'Anda Remaja';
                    echo "$nama, $umur <br/>";
                } else if ($umur < 59) {
                    $umur = 'Anda Dewasa';
                    echo "$nama, $umur <br/>";
                } else if ($umur < 100) {
                    $umur = 'Anda Lansia';
                    echo "$nama, $umur <br/>";
                }
            }
            ?>
        </div>
        <a href="index.php">Kembali</a>
    </div>
   
</body>
</html>
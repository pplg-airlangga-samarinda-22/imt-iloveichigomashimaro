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
            <input value="lihat umur" type="submit">
        </form>
        <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $umur = $_POST["umur"];

                if ($umur < 12) {
                    $umur = 'Anda Masih Anak-anak';
                    echo $umur;
                } else if ($umur < 19) {
                    $umur = 'Anda Remaja';
                    echo $umur;
                } else if ($umur < 59) {
                    $umur = 'Anda Dewasa';
                    echo $umur;
                } else if ($umur < 70) {
                    $umur = 'Anda Lansia';
                    echo $umur;
                }
            }
            ?>
        </div>
        <a href="index.php">Kembali</a>
    </div>
   
</body>
</html>
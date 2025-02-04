<html lang="en">
    
<head>
    <title>IMT Penghitung Berat Badan</title>
</head>
<body>
    <div>
        <h2>IMT Penghitung Berat Badan</h2>
        
        <form method="POST">
            <label for="angka1">Masukkan Berat</label>
            <input step="any" name="angka1" id="angka1" required> <br>
            <label for="angka2">Masukkan Tinggi</label>
            <input step="any" name="angka2" id="angka2" required> <br>
            <input name="imt" id="imt" value="menghitung" type="submit" value="hitung">
            <option name="imt" id="imt" value="menghitung"></option>
    </form>
    </div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $berat = $_POST['angka1'];
            $tinggi = $_POST['angka2'];
            $kurus1 = 'Kurus, Kekurangan berat badan berat';
            $kurus2 = 'Kurus, Kekurangan berat badan ringan';
            $normal = 'Normal';
            $berat1 = 'Gemuk, Kelebihan berat badan ringan';
            $berat2 = 'Gemuk, Kelebihan berat badan berat';
            $imt = $_POST['imt'];
            

            switch ($imt) {
                case 'menghitung':
                    $imt = $berat / ($tinggi * $tinggi);
                    echo "Hasil BMI: $imt <br/> "; 
                    
                    if ($imt < 17.0) {
                        $imt = $kurus1;
                        echo "Hasil: $kurus1";
                    }
                    
                    else if ($imt < 17.0 - 18.4) {
                        $imt = $kurus2;
                        echo "Hasil: $kurus2";
                    }
                    else if ($imt < 18.5 - 25.0) {
                        $imt = $normal;
                        echo "Hasil: $normal";
                    }
                    else if ($imt < 27.8) {
                        $imt = $berat1;
                        echo "Hasil: $berat1";
                    }
                    else if ($imt < 100.0) {
                        $imt = $berat2;
                        echo "Hasil: $berat2";
                        
                    }
            }
            
        }
                
        

        ?>
    </div>
</div>

</body>
</html>


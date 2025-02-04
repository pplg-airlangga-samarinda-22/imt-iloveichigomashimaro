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
            <label for="imt">IMT</label>
            <select name="imt" id="imt" required>
                <option value="menghitung">Hitung</option>
            </select>
            <input value="menghitung" type="submit" value="hitung"> <br>

    </form> <br>

    </div class="result"> <br>
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
            $hasil = 0; 

            switch ($imt) {
                case 'menghitung':
                    $imt = $berat / ($tinggi * $tinggi);
                    echo $imt."<br />"; 
                    
                    if ($imt < 16) {
                        $imt = $kurus1;
                        echo "Hasil: $kurus1";
                    }
                    
                    elseif ($imt < 17 - 18) {
                        $imt = $kurus2;
                        echo "Hasil: $kurus2";
                    }
                    elseif ($imt < 18.5 - 25) {
                        $imt = $normal;
                        echo "Hasil: $normal";
                    }
                    elseif ($imt < 25.1 - 27.0) {
                        $imt = $berat1;
                        echo "Hasil: $berat1";
                    }
                    elseif ($imt < 28) {
                        $imt = $berat2;
                        echo "Hasil: $berat2";
                        
                    }
            }
            
        }
                
        

        ?>
    </div> <br>
</div> <br>

</body>
</html>


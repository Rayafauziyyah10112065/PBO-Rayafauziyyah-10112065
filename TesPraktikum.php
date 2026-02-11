<?php

class KalkulatorSuhu {
    
    // Property
    public $suhu;

    // Constructor (optional, untuk langsung isi nilai)
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}

// Membuat objek
$nilaiSuhu = 30; // bisa diganti sesuai kebutuhan
$kalkulator = new KalkulatorSuhu($nilaiSuhu);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Suhu OOP</title>
</head>
<body>

    <h2>===== KALKULATOR SUHU =====</h2>
    <p>Satuan : Celsius (°C)</p>
    <hr>

    <p>SUHU (C) : <?php echo $kalkulator->suhu; ?></p>
    <p>FAHRENHEIT : <?php echo $kalkulator->cToF(); ?></p>
    <p>KELVIN : <?php echo $kalkulator->cToK(); ?></p>

</body>
</html>
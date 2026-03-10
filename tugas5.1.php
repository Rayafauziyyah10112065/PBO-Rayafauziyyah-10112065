<?php

class Pembelian {

    // Properties
    public $namaPembeli;
    public $kartuMember;
    public $totalBelanja;
    public $diskon = 0;
    public $totalBayar;

    // Constructor
    public function __construct($namaPembeli, $kartuMember, $totalBelanja) {
        $this->namaPembeli = $namaPembeli;
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;
    }

    // Method untuk menghitung diskon
    public function hitungDiskon() {

        if ($this->kartuMember == true) {

            if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } elseif ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            }

        } else {

            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            }

        }

        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }

    // Method menampilkan hasil
    public function tampilkanData() {
        echo "Pembeli : " . $this->namaPembeli . "<br>";
        echo "Kartu Member : " . ($this->kartuMember ? "Memiliki" : "Tidak Memiliki") . "<br>";
        echo "Total Belanja : Rp " . $this->totalBelanja . "<br>";
        echo "Diskon : Rp " . $this->diskon . "<br>";
        echo "Total Bayar : Rp " . $this->totalBayar . "<br>";
        echo "-----------------------------<br>";
    }
}


// Membuat Object
$p1 = new Pembelian("Pembeli 1", true, 200000);
$p2 = new Pembelian("Pembeli 2", true, 570000);
$p3 = new Pembelian("Pembeli 3", false, 120000);
$p4 = new Pembelian("Pembeli 4", false, 90000);

// Hitung dan tampilkan
$dataPembeli = [$p1, $p2, $p3, $p4];

foreach ($dataPembeli as $p) {
    $p->hitungDiskon();
    $p->tampilkanData();
}

?>
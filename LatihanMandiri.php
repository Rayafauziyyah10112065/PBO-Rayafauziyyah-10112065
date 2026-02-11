<?php

class BelanjaWarung {

    // Static property pajak 2%
    public static $pajak = 0.02;

    // Property
    public $kasir;
    public $pembeli;
    public $namaBarang;
    public $harga;
    public $jumlah;
    public $diskon;
    public $uangDibayar;

    // Constructor
    public function __construct($kasir, $pembeli, $namaBarang, $harga, $jumlah, $diskon, $uangDibayar) {
        $this->kasir = $kasir;
        $this->pembeli = $pembeli;
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->diskon = $diskon;
        $this->uangDibayar = $uangDibayar;
    }

    // Hitung subtotal
    public function hitungSubtotal() {
        return $this->harga * $this->jumlah;
    }

    // Hitung pajak
    public function hitungPajak() {
        return ($this->hitungSubtotal() - $this->diskon) * self::$pajak;
    }

    // Hitung total akhir
    public function hitungTotalAkhir() {
        return ($this->hitungSubtotal() - $this->diskon) + $this->hitungPajak();
    }

    // Method baru hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->hitungTotalAkhir();
    }
}

// =======================
// PROGRAM UTAMA
// =======================

$warung = new BelanjaWarung(
    "SISTEM",
    "Raya",
    "Gula 1 Kg",
    65000,
    2,
    13000,      // diskon 10%
    130000      // uang dibayar
);

// Output
echo "==================== WARUNG SI1B ====================<br>";
echo "Kasir     : " . $warung->kasir . "<br>";
echo "Pembeli   : " . $warung->pembeli . "<br>";
echo "---------------------------------------------------<br>";
echo $warung->namaBarang . " x " . $warung->jumlah . 
     " @ " . number_format($warung->harga,0,",",".") . "<br>";
echo "---------------------------------------------------<br>";
echo "SUBTOTAL  : Rp " . number_format($warung->hitungSubtotal(),0,",",".") . "<br>";
echo "DISKON    : Rp " . number_format($warung->diskon,0,",",".") . "<br>";
echo "PAJAK 2%  : Rp " . number_format($warung->hitungPajak(),0,",",".") . "<br>";
echo "---------------------------------------------------<br>";
echo "TOTAL BAYAR : Rp " . number_format($warung->hitungTotalAkhir(),0,",",".") . "<br>";
echo "UANG BAYAR  : Rp " . number_format($warung->uangDibayar,0,",",".") . "<br>";
echo "KEMBALIAN   : Rp " . number_format($warung->hitungKembalian(),0,",",".") . "<br>";
echo "===================================================";

?>
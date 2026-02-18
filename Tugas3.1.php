<?php
class tokopegadaiansyariah
{

    public $pinjaman;
    public $bungaPersen;
    public $lamaAngsuran;
    public $hariTerlambat;
    public $dendaPersen = 0.15; // 0.15% per hari

    // Constructor
    public function __construct($pinjaman, $bungaPersen, $lamaAngsuran, $hariTerlambat)
    {
        $this->pinjaman = $pinjaman;
        $this->bungaPersen = $bungaPersen;
        $this->lamaAngsuran = $lamaAngsuran;
        $this->hariTerlambat = $hariTerlambat;
    }

    // Hitung bunga
    public function hitungBunga()
    {
        return $this->pinjaman * ($this->bungaPersen / 100);
    }

    // Total pinjaman
    public function totalPinjaman()
    {
        return $this->pinjaman + $this->hitungBunga();
    }

    // Angsuran per bulan
    public function angsuran()
    {
        return $this->totalPinjaman() / $this->lamaAngsuran;
    }

    // Hitung denda
    public function denda()
    {
        return $this->angsuran() * ($this->dendaPersen / 100) * $this->hariTerlambat;
    }

    // Total pembayaran
    public function totalBayar()
    {
        return $this->angsuran() + $this->denda();
    }

    // Tampilkan hasil
    public function tampilkanData()
    {
        echo "=== TOKO PEGADAIAN SYARIAH ===\n" . "<br>";
        echo "Besaran Pinjaman      : Rp " . number_format($this->pinjaman,0,",",".") . "\n" . "<br>";
        echo "Bunga (%)             : " . $this->bungaPersen . "%\n" . "<br>";
        echo "Total Pinjaman        : Rp " . number_format($this->totalPinjaman(),0,",",".") . "\n" . "<br>";
        echo "Lama Angsuran (bulan) : " . $this->lamaAngsuran . "\n" . "<br>";
        echo "Besaran Angsuran      : Rp " . number_format($this->angsuran(),0,",",".") . "\n" . "<br>";
        echo "Hari Terlambat        : " . $this->hariTerlambat . " hari\n" . "<br>";
        echo "Denda Keterlambatan   : Rp " . number_format($this->denda(),0,",",".") . "\n" . "<br>";
        echo "Total Pembayaran      : Rp " . number_format($this->totalBayar(),0,",",".") . "\n" . "<br>";
    }
}


// Membuat objek
$pegadaian = new tokopegadaiansyariah(1000000, 10, 5, 40);

// Menampilkan hasil
$pegadaian->tampilkanData();

?>

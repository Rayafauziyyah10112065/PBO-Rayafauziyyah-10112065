<?php
class Belanja {
    public $namaPembeli="Miftah";
    public $namaBarang="Sampo";
    public $hargaBarang=9000;
    public $jumlahBarang=2;
    public $totalBayar;
    public $diskon=0.1;
    public static $pajak=0.02;

    public function totalHarga()  {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }

}

$belanja1 = new Belanja();
//var_dump($belanja1)

echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";
?>

<?php
class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;
    public static $pajak=0.02;

    public function totalHarga()  {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }

}

$belanja1 = new Belanja();                                                                                                                                   
$belanja1->namaPembeli = "Miftah";
$belanja1->namaBarang = "Sampo";
$belanja1->hargaBarang = 5000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1;
//var_dump($belanja1)

$belanja2 = new Belanja();
$belanja2->namaPembeli = "Raya";
$belanja2->namaBarang = "Mie";
$belanja2->hargaBarang = 5000;
$belanja2->jumlahBarang = 3;
$belanja2->diskon = 0.2;

echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namaPembeli . "\n";
echo "Subtptal: Rp " . $belanja1->totalHarga() . "\n";


echo "Nama Pembeli: " . $belanja2->namaPembeli . "\n";
echo "Subtotal:  Rp " . $belanja2->totalHarga() . "\n";
echo "</pre>";

?>

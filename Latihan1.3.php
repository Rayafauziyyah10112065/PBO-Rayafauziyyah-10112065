<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan; // tambahan

    function statusHarga()
    {
        if ($this->harga > 5000000)
            $status = "Mahal";
        else
            $status = "Murah";

        return $status;
    }

    // tambahan function status BBM
    function statusBBM()
    {
        if ($this->bahanBakar == "Bensin")
            return "Menggunakan BBM Bensin";
        else if ($this->bahanBakar == "Solar")
            return "Menggunakan BBM Solar";
        else
            return "BBM Tidak Diketahui";
    }

    // tambahan function harga bekas
    function hargaBekas()
    {
        $tahunSekarang = date("Y");
        $umur = $tahunSekarang - $this->tahunPembuatan;

        // penyusutan 10% per tahun
        $hargaBekas = $this->harga - ($this->harga * 0.1 * $umur);

        if ($hargaBekas < 0)
            $hargaBekas = 0;

        return $hargaBekas;
    }
}


// Objek 1
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->jumlahRoda = 2;
$objekKendaraan1->warna = "Hitam";
$objekKendaraan1->bahanBakar = "Bensin";
$objekKendaraan1->tahunPembuatan = 2020;


// Objek 2
$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 100000000;
$objekKendaraan2->jumlahRoda = 4;
$objekKendaraan2->warna = "Putih";
$objekKendaraan2->bahanBakar = "Bensin";
$objekKendaraan2->tahunPembuatan = 2018;


// Output
echo "<h3>Data Kendaraan 1</h3>";
echo "Merek: " . $objekKendaraan1->merek . "<br>";
echo "Tahun: " . $objekKendaraan1->tahunPembuatan . "<br>";
echo "Harga: Rp " . number_format($objekKendaraan1->harga, 0, ",", ".") . "<br>";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan1->statusBBM() . "<br>";
echo "Perkiraan Harga Bekas: Rp " . number_format($objekKendaraan1->hargaBekas(), 0, ",", ".") . "<br><br>";

echo "<h3>Data Kendaraan 2</h3>";
echo "Merek: " . $objekKendaraan2->merek . "<br>";
echo "Tahun: " . $objekKendaraan2->tahunPembuatan . "<br>";
echo "Harga: Rp " . number_format($objekKendaraan2->harga, 0, ",", ".") . "<br>";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan2->statusBBM() . "<br>";
echo "Perkiraan Harga Bekas: Rp " . number_format($objekKendaraan2->hargaBekas(), 0, ",", ".") . "<br>";

?>
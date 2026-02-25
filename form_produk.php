<?php
// Function cek kelulusan
function cekKelulusan($nilai) {
    if ($nilai >= 70) {
        return "Lulus Kuis";
    } else {
        return "Tidak Lulus Kuis";
    }
}

$hasil = "";

if (isset($_POST['submit'])) {

    // Menyimpan data ke dalam array
    $mahasiswa = [
        "nama"   => $_POST['nama'],
        "kelas"  => $_POST['kelas'],
        "matkul" => $_POST['matkul'],
        "nilai"  => $_POST['nilai']
    ];

    // Output ditampung ke variabel
    $hasil  = "Nama : " . $mahasiswa["nama"] . "<br>";
    $hasil .= "Kelas : " . $mahasiswa["kelas"] . "<br>";
    $hasil .= "Mata Kuliah : " . $mahasiswa["matkul"] . "<br>";
    $hasil .= "Nilai : " . $mahasiswa["nilai"] . "<br>";
    $hasil .= cekKelulusan($mahasiswa["nilai"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai PBO</title>
</head>
<body>

<h2>Form Data Nilai PBO</h2>

<form method="POST">
    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Kelas : <br>
    <input type="text" name="kelas" required><br><br>

    Mata Kuliah : <br>
    <input type="text" name="matkul" value="Pemrograman Berorientasi Objek" required><br><br>

    Nilai : <br>
    <input type="number" name="nilai" required><br><br>

    <input type="submit" name="submit" value="Proses">
</form>

<hr>

<?php
echo $hasil;
?>

</body>
</html>
<?php

// Membuat array data mahasiswa
$mahasiswa = [
    [
        "nama" => "Aditya",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ],
    [
        "nama" => "Shinta",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 75
    ],
    [
        "nama" => "Ineu",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 55
    ]
];

// Method untuk menentukan kelulusan
function cekKelulusan($nilai) {
    if ($nilai >= 70) {
        return "Lulus Kuis";
    } else {
        return "Tidak Lulus Kuis";
    }
}

// Menampilkan data
foreach ($mahasiswa as $data) {
    echo "Nama : " . $data["nama"] . "<br>";
    echo "Kelas : " . $data["kelas"] . "<br>";
    echo "Mata Kuliah : " . $data["matkul"] . "<br>";
    echo "Nilai : " . $data["nilai"] . "<br>";
    echo cekKelulusan($data["nilai"]) . "<br>";
    echo "<hr>";
}

?>
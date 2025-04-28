<?php
// Array data
$data = array(
    "nama" => "Dicky",
    "umur" => 23,
    "hobi" => "Fotografi"
);

// Tambahkan kalimat sebelum nama
$data['nama'] = "Halo, nama saya " . $data['nama'];

// Encode array ke JSON
$json = json_encode($data);

// Tampilkan hasil JSON
echo $json;
?>
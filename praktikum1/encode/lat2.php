<?php
// JSON string
$jsonString = '{"nama":"Halo, nama saya Dicky","umur":23,"hobi":"Fotografi"}';

// Decode JSON ke Array
$dataArray = json_decode($jsonString, true);

// Tampilkan semua data dalam 1 baris
echo "Nama: " . $dataArray['nama'] . " | Umur: " . $dataArray['umur'] . " | Hobi: " . $dataArray['hobi']. ", ini adalah tugas praktikum 1 mata kuliah Rekayasa Web";
?>
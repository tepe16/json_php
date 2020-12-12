<?php
// File json yang akan dibaca
$file = "test.json";

// Mendapatkan file json
$mutasi = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($mutasi, true);

// Data array baru
$data [] = array(
    'no'     => 1,
    'no_rekening'   => '123456789',
    'nama_nasabah' => 'Abraham',
    'alamat_nasabah'=>'Yogyakarta',
    'cabang'=>'Janti',
    'transaksi_tanggal' =>'2020-12-12',
    'keterangan'=>'TRANSFER E-BANKING',
    'saldo'=>'300000'

   
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
$mutasi = file_put_contents($file, $jsonfile);

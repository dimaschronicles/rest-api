<?php

// $mahasiswa = [
//   [
//     "nama" => "Dimas",
//     "nim" => "18.11.0031",
//     "emai" => "dimas@gmail.com"
//   ],
//   [
//     "nama" => "Anggie",
//     "nim" => "18.11.0002",
//     "emai" => "anggie@gmail.com"
//   ],
//   [
//     "nama" => "Farhan",
//     "nim" => "18.11.0029",
//     "emai" => "farhan@gmail.com"
//   ]
// ];

// dari database
// db handler
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
// koneksi database
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
// mengubah ke assay assosiative
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

<?php
require_once 'Kendaraan.php';  // Menyertakan file Kendaraan.php
require_once 'Pengemudi.php';  // Menyertakan file Pengemudi.php

$kendaraan = new Kendaraan();  // Membuat objek dari kelas Kendaraan
$kendaraan->setKendaraan("Mobil", "Toyota");
echo $kendaraan->getKendaraan() . "<br>";  // Output: Jenis Kendaraan: Mobil, Merek: Toyota

$pengemudi = new Pengemudi();  // Membuat objek dari kelas Pengemudi
$pengemudi->setPengemudi("Budi", 30);
echo $pengemudi->getPengemudi();  // Output: Nama Pengemudi: Budi, Umur: 30
?>

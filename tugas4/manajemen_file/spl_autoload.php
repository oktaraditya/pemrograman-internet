<?php
function myAutoloader($className) {
    include $className . '.php';  // Mencari file dengan nama yang sama
}

spl_autoload_register('myAutoloader');  // Register autoloader

$kendaraan = new Kendaraan();  // Otomatis mencari dan memuat Kendaraan.php
$kendaraan->setKendaraan("Motor", "Honda");
echo $kendaraan->getKendaraan() . "<br>";  // Output: Jenis Kendaraan: Motor, Merek: Honda

$pengemudi = new Pengemudi();  // Otomatis mencari dan memuat Pengemudi.php
$pengemudi->setPengemudi("Ani", 25);
echo $pengemudi->getPengemudi();  // Output: Nama Pengemudi: Ani, Umur: 25
?>

<?php
require_once 'penjumlahan.php';

$siswa = new siswa('Aldhit', 'Bandung', 'XI RPL1', 'Duren');

echo "Nama... ".$siswa->get_nama(). "<br>";
echo "Lahir.. ".$siswa->get_lahir(). "<br>";
echo "Kelas.. ".$siswa->get_kelas()."<br>";
echo "Status. ".$siswa->get_status();
?>
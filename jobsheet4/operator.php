<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : " . $hasilTambah . "<br>";
echo "Hasil Kurang : " . $hasilKurang . "<br>";
echo "Hasil Kali : " . $hasilKali . "<br>";
echo "Hasil Bagi : " . $hasilBagi . "<br>";
echo "Sisa Bagi : " . $sisaBagi . "<br>";
echo "Hasil Pangkat : " . $pangkat . "<br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama : " . $hasilSama . "<br>";
echo "Hasil Tidak Sama : " . $hasilTidakSama . "<br>";
echo "Hasil Lebih Kecil : " . $hasilLebihKecil . "<br>";
echo "Hasil Lebih Besar : " . $hasilLebihBesar . "<br>";
echo "Hasil Lebih Kecil Sama : " . $hasilLebihKecilSama . "<br>";
echo "Hasil Lebih Besar Sama : " . $hasilLebihBesarSama . "<br>";
?>
<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}
echo "<br> <br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br> <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";
echo "<br> <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor";
echo "<br> <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br> <br>";

//no 22
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 85 + 78 + 90 + 75 + 88 + 79; // mengabaikan 2 nilai tertinggi (96, 92) dan 2 terendah (64, 70)

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah adalah: $totalNilai";
echo "<br> <br>";

//no 23
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga sebelum diskon: Rp $hargaProduk <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga setelah diskon: Rp $hargaAkhir";
echo "<br> <br>";

//no 24
$totalPoin = 520;

echo "Total skor pemain adalah: $totalPoin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($totalPoin > 500 ? "YA" : "TIDAK");
?>
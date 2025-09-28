<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam, ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Adrian", "Hallo");

echo "<hr/>";

$saya = "Rafi";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>
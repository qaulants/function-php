<?php 

function volumeKubus($sisi){
    $volume = pow($sisi, 3);
    return $volume;
}

echo "Volume Kubus : ";
echo volumeKubus(6);
echo "<br>";

function luasKubus($sisi){
    $luas = 6 * pow($sisi, 2);
    return $luas;
}
echo "Luas Permukaan Kubus : ";
echo luasKubus(6);
echo "<br><br>";

function volumeBalok($p, $l, $t){

    $volume = $p * $l * $t;
    return $volume;
}
echo "Volume Balok : ";
echo volumeBalok(3, 4, 6);
echo "<br>";

function luasBalok($p, $l, $t){
    $luas = 2 * ($p*$l+$p*$t+$l*$t);
    return $luas;
}
echo "Luas Permukaan Balok : ";
echo luasBalok(3, 4, 6);
echo "<br><br>";

function volumeLimasSegiEmpat($sisi, $t){

    $volume = 1/3 * pow($sisi, 2) * $t;
    return $volume;
}
echo "Volume Limas Segi Empat : ";
echo volumeLimasSegiEmpat(3, 2);
echo "<br><br>";

function volumeTabung($r, $t){

    $volume = M_PI * pow($r, 2) * $t;
    return $volume;
}
echo "volume tabung : ";
echo volumeTabung(7, 2);
echo "<br>";

function LuasTabung($r, $t){

    $luas = 2 * 3.14 * $r * ($r + $t);
    return $luas;
}
echo "luas tabung : ";
echo LuasTabung(7, 2);
echo "<br><br>";

function volumeBola($r){

    $volume = 4/3 * 3.14 * pow($r, 3);
    return $volume;
}
echo "volume bola : ";
echo volumeBola(7);
echo "<br>";

function LuasBola($r){

    $luas = 4 * 3.14 * pow($r, 2);
    return $luas;
}
echo "luas bola : ";
echo LuasBola(7);
echo "<br>";
?>
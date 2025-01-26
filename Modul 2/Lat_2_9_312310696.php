<?php
function luasPersegi($sisi)
{
    return $sisi * $sisi;
}
function luasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}
function luasLingkaran($jariJari)
{
    return pi() * pow($jariJari, 2);
}
function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}
echo "Luas persegi dengan sisi 4: " . luasPersegi(4) . "\n"; // Output: 16
echo "Luas persegi panjang dengan panjang 5 dan lebar 3: " . luasPersegiPanjang(5, 3) . "\n"; // Output: 15
echo "Luas lingkaran dengan jari-jari 7: " . round(luasLingkaran(7), 2) . "\n"; // Output: 153.94
echo "Luas segitiga dengan alas 6 dan tinggi 8: " . luasSegitiga(6, 8) . "\n"; // Output: 24
?>
<!-- variable -->

<?php 
$nama = "Qaulan";
$umur = 24;
$nilaiFloat = 4.6;

echo $nama;
echo "<br>";
echo $umur;
echo "<br>";
echo $nilaiFloat;
echo "<br>";
// aritmatika
$a = 4;
$b = 6;
$c = $a * $b;
echo "Hasil dari perkalian " . $a . "*". $b. "=" . $c;
echo "<br>";
$hasilBagi = $a / $b;
echo "Hasil dari pembagian " . $a . "/". $b. "=" . $hasilBagi;

echo "<br>";
$hasilTambah = $a + $b;
echo "Hasil dari tambah " . $a . "+". $b. " = " . $hasilTambah;
echo "<br>";
// array cara lama
$nama = array("Qaulan", "Tsaqila", "Qau", "Lan", 7);
var_dump($nama);
echo "<br>";
echo $nama[2];
echo "<br>";
$nama2 = [["nama" => "Qaulan", "umur" => 2], 
["nama"=> "Tsaqila", "umur"=> 3]];

var_dump($nama2[0]["nama"]);
echo "<br>";

foreach ($nama2 as $value) {
    echo "Nama " . $value['nama']. "<br>";
    echo "Umur " . $value['umur']. "<br>";
}

// mysqli_fetch_all() untuk foreach
// $rows = mysqli_fetch_all($arr, MYSQLI_ASSOC)
// mysqli_fetch_assoc() untuk while
// row = mysqli_fetch_assoc($arr)

echo  "<br><br>";
$param = 0;
while ($param < count($nama2)) {
    echo "Nama" . $nama2[$param]['nama']. "<br>";
    echo "Umur" . $nama2[$param]['umur']. "<br>";
    $param++;
}

// function untuk mengelompokkan kode nya
function penjumlahan($nilaiX, $nilaiY){
    return $nilaiX + $nilaiY;
}
$x = 6;
$y = 7;

echo penjumlahan($x, $y);
echo  "<br>";
function pengurangan($nilaiX, $nilaiY){
    return $nilaiX - $nilaiY;
}
echo pengurangan($y, $x);
?>
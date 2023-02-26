<?php
// definisikan konstansta
define('PHI', 3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');
// soal 1 hitung luas lingkaran dengan jari2
// soal 2 hitung keliling nya

// definisikan nilai jari2
$jari = 8;

// hitung nilai luas
$luas = PHI * $jari * $jari;

// hitung nilai keliling
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan  jari jari ' .$jari. ' = ' .$luas;
echo '<br/>Kelilingnya : ' .$kll;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>

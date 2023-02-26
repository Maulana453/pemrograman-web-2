<?php
$ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
echo "Ini adalah hasil data buah dalam array";
// cetak buah ke index ke 2
echo "</br>Ini buah index ke 2 - $ar_buah[2]";
// cetak total buah
echo '<br/>Total buah adalah ' . count($ar_buah);

// cetak seluruh data array buah
echo '<ol>';
foreach($ar_buah as $buah){
    echo '<li>'. $buah .'</li>';
}
echo"</ol>";
// tambahkan buah
$ar_buah[]="Durian";

// hapus buah index ke 1
unset($ar_buah[1]);

// ubah buah index ke 2 menjadi Manggis
$ar_buah[2]="Manggis";

// cetak seluruh buah dengan index nya
echo "<ol>";
foreach($ar_buah as $buah){
    echo "<li> $buah </li>";
}
echo "</ol>";
?>
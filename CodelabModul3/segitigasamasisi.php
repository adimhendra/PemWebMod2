<?php
$tinggi = 5; // Tinggi segitiga

for ($i = 1; $i <= $tinggi; $i++) {
    // Cetak spasi
    for ($j = $tinggi - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;"; // Gunakan spasi
    }
    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

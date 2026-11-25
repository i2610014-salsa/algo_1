nama file nilai.php
<?php
$N = 5;
$A = [];

// 1. Mengisi larik
for ($i = 0; $i < $N; $i++) {
    echo "Masukkan elemen ke-" . ($i + 1) . ": ";
    $A[$i] = (int) trim(fgets(STDIN));
}

// 2. Menampilkan larik
echo "Isi larik: ";
for ($i = 0; $i < $N; $i++) {
    echo $A[$i] . " ";
}
echo "\n";

// 3. Total, rata-rata, terbesar
$total = 0;
$terbesar = $A[0];
for ($i = 0; $i < $N; $i++) {
    $total += $A[$i];
    if ($A[$i] > $terbesar) {
        $terbesar = $A[$i];
    }
}
echo "Total     : $total\n";
echo "Rata-rata : " . ($total / $N) . "\n";
echo "Terbesar  : $terbesar\n";

// 4. Mencari elemen (sequential search)
echo "Cari angka: ";
$x = (int) trim(fgets(STDIN));
$posisi = -1;
for ($i = 0; $i < $N; $i++) {
    if ($A[$i] == $x) {
        $posisi = $i;
        break;
    }
}
if ($posisi != -1) {
    echo "$x ditemukan di indeks $posisi (elemen ke-" . ($posisi + 1) . ")\n";
} else {
    echo "$x tidak ditemukan\n";
}

// 5. Mengurutkan ascending
for ($i = 0; $i < $N - 1; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        if ($A[$i] > $A[$j]) {
            $temp = $A[$i];
            $A[$i] = $A[$j];
            $A[$j] = $temp;
        }
    }
}
echo "Setelah diurutkan: " . implode(" ", $A) . "\n";
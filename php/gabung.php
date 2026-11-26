nama file gabung.php

<?php
function bacaLarik(int $m, string $nama): array
{
    $A = [];
    for ($i = 0; $i < $m; $i++) {
        echo "Larik $nama, elemen ke-" . ($i + 1) . ": ";
        $A[$i] = (int) trim(fgets(STDIN));
    }
    return $A;
}

function cetakLarik(array $A, int $m): void
{
    for ($i = 0; $i < $m; $i++) {
        echo $A[$i] . " ";
    }
    echo "\n";
}

// Menggabungkan larik A (n elemen) dan B (m elemen) menjadi C (n + m elemen)
function gabungLarik(array $A, int $n, array $B, int $m): array
{
    $C = [];

    // salin isi A ke C
    for ($i = 0; $i < $n; $i++) {
        $C[$i] = $A[$i];
    }
    // salin isi B ke C, mulai setelah elemen terakhir A
    for ($i = 0; $i < $m; $i++) {
        $C[$n + $i] = $B[$i];
    }
    return $C;
}

// ===== Program utama =====
echo "Jumlah elemen larik A: ";
$n = (int) trim(fgets(STDIN));
echo "Jumlah elemen larik B: ";
$m = (int) trim(fgets(STDIN));

if ($n < 1 || $m < 1) {
    echo "Jumlah elemen kedua larik minimal 1.\n";
    exit;
}

echo "\n";
$A = bacaLarik($n, "A");
echo "\n";
$B = bacaLarik($m, "B");

$L = $n + $m;
$C = gabungLarik($A, $n, $B, $m);

echo "\nLarik A ($n elemen): ";
cetakLarik($A, $n);
echo "Larik B ($m elemen): ";
cetakLarik($B, $m);
echo "Larik C ($L elemen): ";
cetakLarik($C, $L);
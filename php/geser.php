nama file geser.php

<?php
// Membaca / mengisi larik sebanyak $m elemen
function bacaLarik(int $m): array
{
    $A = [];
    for ($i = 0; $i < $m; $i++) {
        echo "Masukkan elemen ke-" . ($i + 1) . ": ";
        $A[$i] = (int) trim(fgets(STDIN));
    }
    return $A;
}

// Menampilkan isi larik
function cetakLarik(array $A, int $m): void
{
    for ($i = 0; $i < $m; $i++) {
        echo $A[$i] . " ";
    }
    echo "\n";
}

// Geser kanan: elemen terakhir pindah ke posisi pertama
function geserKanan(array $A, int $m): array
{
    $temp = $A[$m - 1];
    for ($i = $m - 1; $i > 0; $i--) {
        $A[$i] = $A[$i - 1];
    }
    $A[0] = $temp;
    return $A;
}

// Geser kiri: elemen pertama pindah ke posisi terakhir
function geserKiri(array $A, int $m): array
{
    $temp = $A[0];
    for ($i = 1; $i < $m; $i++) {
        $A[$i - 1] = $A[$i];
    }
    $A[$m - 1] = $temp;
    return $A;
}

// ===== Program utama =====
echo "Masukkan jumlah elemen larik: ";
$N = (int) trim(fgets(STDIN));

if ($N < 1) {
    echo "Jumlah elemen minimal 1.\n";
    exit;
}

$A = bacaLarik($N);

echo "\nLarik asli     : ";
cetakLarik($A, $N);

echo "\nPilih salah satu:\n";
echo " 1. Geser Kanan\n";
echo " 2. Geser Kiri\n";
echo "Pilihan: ";
$pilihan = (int) trim(fgets(STDIN));

if ($pilihan == 1) {
    $A = geserKanan($A, $N);
    echo "\nSetelah geser kanan : ";
} elseif ($pilihan == 2) {
    $A = geserKiri($A, $N);
    echo "\nSetelah geser kiri  : ";
} else {
    echo "Pilihan tidak valid.\n";
    exit;
}
cetakLarik($A, $N);
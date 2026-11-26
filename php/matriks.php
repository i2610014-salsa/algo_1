nama file matriks.php

<?php
// Mengisi matriks berukuran $baris x $kolom, baris demi baris
function isiMatriks(int $baris, int $kolom): array
{
    $M = [];
    for ($b = 0; $b < $baris; $b++) {
        for ($k = 0; $k < $kolom; $k++) {
            echo "Elemen baris-" . ($b + 1) . " kolom-" . ($k + 1) . ": ";
            $M[$b][$k] = (int) trim(fgets(STDIN));
        }
    }
    return $M;
}

// Menampilkan matriks dalam bentuk tabel
function tampilMatriks(array $M, int $baris, int $kolom): void
{
    for ($b = 0; $b < $baris; $b++) {
        for ($k = 0; $k < $kolom; $k++) {
            echo str_pad((string) $M[$b][$k], 6, " ", STR_PAD_LEFT);
        }
        echo "\n";
    }
}

// ===== Program utama =====
echo "Jumlah baris : ";
$baris = (int) trim(fgets(STDIN));
echo "Jumlah kolom : ";
$kolom = (int) trim(fgets(STDIN));

if ($baris < 1 || $kolom < 1) {
    echo "Jumlah baris dan kolom minimal 1.\n";
    exit;
}

echo "\n";
$M = isiMatriks($baris, $kolom);

echo "\nMatriks $baris x $kolom:\n";
tampilMatriks($M, $baris, $kolom);
<?php
declare(strict_types=1);
$prices = [10, 40, 100];
$discount = 15;
// TODO : closure puis fonction fléchée.

$appliquerRemise = function (float $price) use ($discount): float {
    $nouveauPrix = $price - $discount;
    return $nouveauPrix < 0 ? 0.0 : $nouveauPrix;
};

$prixRemise = array_map($appliquerRemise, $prices);

$enCentimes = fn($price) => (int) round($price * 100);
$prixEnCentimes = array_map($enCentimes, $prixRemise);

echo "Prix originaux : " . implode(', ', $prices) . "\n";
echo "Remise appliquée : " . $discount . "€\n";
echo "Prix après remise : " . implode(', ', $prixRemise) . "\n";

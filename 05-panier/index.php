<?php
declare(strict_types=1);
$products = [
    ['name' => 'Clavier', 'price' => 59, 'available' => true],
    ['name' => 'Tapis', 'price' => 12, 'available' => false],
    ['name' => 'Souris', 'price' => 30, 'available' => true],
    ['name' => 'Tour', 'price' => 30, 'unavailable' => true],
];
// TODO : filter, map, reduce.

$disponible = array_filter($products, fn($p) => $p['available']);

$price = array_map(fn($pr) => $pr['price'], $disponible);

$sommePrice = array_reduce($price, fn($total, $pri) => $total + $pri, 0);

$moyenne = $sommePrice / count($disponible);

echo "pric moyen des available : $moyenne\n";

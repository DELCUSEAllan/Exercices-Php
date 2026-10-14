<?php
declare(strict_types=1);
$scores = [45, 0, 72, 120, 140];
// TODO : foreach, for, while ; vérifiez la terminaison des boucles.

foreach ($scores as $score) {
    if ($score === 0) {
        continue;
    }
    echo "le score est : $score \n";
    if ($score >= 100) {
        break;
    }
}

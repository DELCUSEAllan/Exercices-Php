<?php
declare(strict_types=1);
$artiste = 'Neon Pulse';
$numero = 23;
$prix = 35.0;
// TODO : produire trois affichages distincts.

echo("Concert de : $artiste \n");
echo('Artiste : '. $artiste);
echo sprintf("\n%04d\n%.2f", $numero, $prix);


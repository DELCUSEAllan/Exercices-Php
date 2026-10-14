<?php
declare(strict_types=1);
$pseudo = 'Nova';
$niveau = 7;
$energie = 84.5;
$actif = true;
// TODO : afficher la présentation, les types et une comparaison stricte.

echo('Bonjour ' .$pseudo. ' tu es niveau ' .$niveau. ' tu as pour énergie : ' .$energie. ' est tu es : ' .$actif);

$typage= get_debug_type($pseudo) == get_debug_type($niveau);
echo "->" .($typage ? "true" : "false");

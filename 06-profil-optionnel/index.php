<?php
declare(strict_types=1);
$profile = ['name' => 'Mira', 'nickname' => null];
$lastLogin = null;
// TODO

$nom_affiché = $profile['nickname'] ?? $profile['name'];
echo "Nom affiché : $nom_affiché \n";

echo "isset('nickname') : " . (isset($profile['nickname']) ? 'true' : 'false') . "\n";

echo "array_key_exists('nickname') : " . (array_key_exists('nickname', $profile) ? 'true' : 'false') . "\n\n";

$login = $lastLogin?->format('d/m/Y') ?? 'jamais';
echo "Dernière connexion : " . $login . "\n";

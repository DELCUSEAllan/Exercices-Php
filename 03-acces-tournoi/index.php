<?php
declare(strict_types=1);
function accessMessage(int $age, bool $hasTicket, bool $banned): string {
    // TODO
    if($age >= 16 && $hasTicket === true && $banned === false) {
        return 'Vous êtes autorisé à entrer dans le cinéma';
    }
    return 'rentre pas';
}

echo accessMessage(17, true, false), "\n";
echo accessMessage(17, true, true), "\n";

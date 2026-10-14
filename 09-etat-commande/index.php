<?php
declare(strict_types=1);

enum StatutCommande: string
{
    case EnAttente = 'en_attente';
    case EnCours = 'en_processus';
    case Livré = 'livrer';
}

$valeursExternes = ['en_attente', 'paid', 'en_processus', 'lost', 'livrer'];

foreach ($valeursExternes as $valeur) {
    echo "Analyse de la valeur externe : '{$valeur}'\n";

    $statut = StatutCommande::tryFrom($valeur);

    if ($statut === null) {
        echo "Statut inconnu ou invalide détecté.\n\n";
        continue;
    }

    $etiquette = match ($statut) {
        StatutCommande::EnAttente => 'Votre commande est en attente de validation.',
        StatutCommande::EnCours => 'Nous préparons votre colis avec soin.',
        StatutCommande::Livré => 'Le colis a été remis au transporteur !',
    };

    echo "{$etiquette}\n\n";
}

# 09 — État de commande

**Notions :** enum, match, tryFrom  
**Situation :** Une commande passe de brouillon à payée puis expédiée.

## Consignes

Créez une enum adossée à `string` avec ces trois états. Convertissez une valeur externe avec `tryFrom` ; affichez une étiquette avec `match` exhaustif. Gérez explicitement une valeur inconnue.

## Vérification

La valeur `paid` donne « À préparer » ; `lost` donne « Statut inconnu ».

Depuis la racine du projet, lancez `php 09-etat-commande/index.php`. 

# 14 — Code promo invalide

**Notions :** exceptions, try/catch/finally  
**Situation :** Un code promo peut accorder 10 % ou être invalide.

## Consignes

Créez `discountedPrice(int $price, string $code): int` ; acceptez `BON10`, sinon lancez `InvalidArgumentException`. Capturez l’erreur dans le code appelant et utilisez `finally` pour écrire « Vérification terminée ».

## Vérification

100 avec BON10 vaut 90 ; code inconnu signale une erreur sans arrêter la suite.

Depuis la racine du projet, lancez `php 14-code-promo/index.php`. 

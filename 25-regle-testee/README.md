# 25 — Règle métier testée

**Notions :** tests, assertions, cas limites  
**Situation :** Une carte bénéficie de 10 % de remise dès 100 €.

## Consignes

Écrivez la fonction `priceAfterDiscount(int $price): int`. Complétez `expectSame` pour comparer strictement et échouer avec une exception. Testez 99, 100 et 200 ; ajoutez un test du prix négatif qui doit lancer `InvalidArgumentException`.

## Vérification

Les cas rendent 99, 90 et 180 ; un prix négatif est rejeté.

Depuis la racine du projet, lancez `php 25-regle-testee/index.php`. 

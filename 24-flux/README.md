# 24 — Flux de scores

**Notions :** Generator, yield  
**Situation :** Un flux de scores fournit les manches une par une.

## Consignes

Écrivez un générateur `scores(int $count): Generator` qui affiche lorsqu’une valeur est produite, puis `yield` des multiples de 10. Consommez-le dans `foreach` pour voir l’alternance entre production et consommation.

## Vérification

Pour trois scores, l’affichage alterne production 10, consommation 10, etc.

Depuis la racine du projet, lancez `php 24-flux/index.php`. 

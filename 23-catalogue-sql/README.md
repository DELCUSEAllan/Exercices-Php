# 23 — Catalogue SQL

**Notions :** PDO, SQLite, requêtes préparées  
**Situation :** Une boutique recherche des jeux par prix minimum.

## Consignes

Créez une base SQLite en mémoire avec PDO, une table et trois jeux. Insérez les données avec une requête préparée, puis sélectionnez les titres dont le prix atteint un seuil avec un paramètre lié. Ne concaténez jamais le seuil dans la requête.

## Vérification

Pour un seuil de 30, les jeux à 35 et 50 ressortent.

Depuis la racine du projet, lancez `php 23-catalogue-sql/index.php`. 

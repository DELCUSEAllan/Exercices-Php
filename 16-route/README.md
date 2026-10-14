# 16 — Route déclarative

**Notions :** attributs, réflexion  
**Situation :** Un mini routeur repère des méthodes marquées par un chemin.

## Consignes

Créez un attribut `Route` ciblant les méthodes, annotez deux méthodes de `PageController`, puis parcourez leurs attributs avec `ReflectionClass` et affichez chemin et nom de méthode. L’attribut est seulement une métadonnée : votre boucle l’interprète.

## Vérification

Les chemins `/` et `/about` apparaissent avec leurs méthodes.

Depuis la racine du projet, lancez `php 16-route/index.php`. 

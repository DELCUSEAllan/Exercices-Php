# 19 — Recherche web

**Notions :** $_GET, HTTP, validation, htmlspecialchars  
**Situation :** Une page PHP affiche un terme de recherche fourni dans l’URL.

## Consignes

Lisez `q`, refusez les tableaux et limitez la longueur. Échappez la donnée uniquement au moment de l’écrire dans le HTML. Affichez la méthode HTTP. Essayez une chaîne contenant une balise HTML.

## Vérification

`?q=PHP` affiche PHP ; une balise saisie apparaît comme texte.

Depuis la racine du projet, lancez `php -S 127.0.0.1:8000 -t 19-recherche-web`. Puis ouvrez `http://127.0.0.1:8000`. Arrêtez le serveur avant de lancer un autre exercice web sur ce port.

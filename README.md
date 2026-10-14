# Exercices PHP moderne — Consignes et amorces

26 exercices indépendants pour mettre en pratique les notions de PHP Lab. Chaque dossier contient son sujet, ses cas de vérification et un fichier `index.php`. Réalisez les exercices dans l’ordre ou choisissez ceux qui correspondent à la notion travaillée. Les exercices 19 à 22 et 26 se lancent dans un navigateur.

PHP 8.2 ou supérieur est requis. Aucun paquet Composer n’est nécessaire. L’exercice 23 utilise l’extension facultative `pdo_sqlite`. Les projets n’ont besoin d’aucun service distant.

| N° | Exercice | Notions | Exécution |
| --- | --- | --- | --- |
| 01 | Carte de joueur | echo, variables, types | Terminal |
| 02 | Billet de concert | chaînes, interpolation, concaténation, sprintf | Terminal |
| 03 | Accès au tournoi | conditions, opérateurs, comparaison stricte | Terminal |
| 04 | Tableau des scores | for, foreach, while, break, continue | Terminal |
| 05 | Panier de boutique | tableaux associatifs, map, filter, reduce | Terminal |
| 06 | Profil incomplet | null, ??, ?->, isset, array_key_exists | Terminal |
| 07 | Livraison offerte | fonctions, types, valeurs par défaut, arguments nommés | Terminal |
| 08 | Promotions configurables | closures, use, fonctions fléchées | Terminal |
| 09 | État de commande | enum, match, tryFrom | Terminal |
| 10 | Portefeuille de crédits | classe, constructeur promu, propriétés privées | Terminal |
| 11 | Prix immuable | readonly class, valeur objet | Terminal |
| 12 | Notifications interchangeables | interface, polymorphisme | Terminal |
| 13 | Personnages spécialisés | héritage, parent::, trait | Terminal |
| 14 | Code promo invalide | exceptions, try/catch/finally | Terminal |
| 15 | Mesures typées | union, mixed, never | Terminal |
| 16 | Route déclarative | attributs, réflexion | Terminal |
| 17 | Sauvegarde JSON | fichiers, json_encode, json_decode | Terminal |
| 18 | Heure d’un événement | DateTimeImmutable, fuseaux horaires, diff | Terminal |
| 19 | Recherche web | $_GET, HTTP, validation, htmlspecialchars | Navigateur |
| 20 | Inscription contrôlée | POST, filtre email, validation, réaffichage | Navigateur |
| 21 | Compteur de visite | session_start, $_SESSION, cookie | Navigateur |
| 22 | Vérification de mot de passe | password_hash, password_verify, échappement | Navigateur |
| 23 | Catalogue SQL | PDO, SQLite, requêtes préparées | Terminal |
| 24 | Flux de scores | Generator, yield | Terminal |
| 25 | Règle métier testée | tests, assertions, cas limites | Terminal |
| 26 | Mini produit : vote des idées | formulaire, session, fonctions, tableaux, rendu sûr | Navigateur |

## Démarrer

Placez-vous à la racine du projet. Pour un exercice de console : `php 01-carte-joueur/index.php`. Pour un exercice web : `php -S 127.0.0.1:8000 -t 19-recherche-web`, puis ouvrez `http://127.0.0.1:8000`. Les commandes propres à chaque exercice figurent dans son README. Avec Docker : `docker compose run --rm php php 01-carte-joueur/index.php` pour la console ou `docker compose up` pour l’exercice web configuré dans `docker-compose.yml` (modifiez `-t 19-recherche-web` pour changer de dossier).

## Progression

Travaillez d’abord la règle métier sur des valeurs déterministes, puis vérifiez les cas limites indiqués dans le sujet. Pour le web, distinguez les entrées reçues, leur validation et l’échappement lors du rendu HTML. Pour l’exercice 26, une nouvelle session de navigation permet de repartir d’un compteur vide.

Propriété de Julien Grade

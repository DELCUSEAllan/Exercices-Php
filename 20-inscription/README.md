# 20 — Inscription contrôlée

**Notions :** POST, filtre email, validation, réaffichage  
**Situation :** Un formulaire d’inscription collecte un nom et une adresse e-mail.

## Consignes

Affichez le formulaire. En POST, refusez les tableaux, le nom vide ou trop long et l’adresse non valide. Affichez les erreurs ou un message de succès ; échappez tout texte provenant de la requête dans le HTML.

## Vérification

Une adresse invalide affiche une erreur ; une saisie valide affiche une confirmation.

Depuis la racine du projet, lancez `php -S 127.0.0.1:8000 -t 20-inscription`. Puis ouvrez `http://127.0.0.1:8000`. Arrêtez le serveur avant de lancer un autre exercice web sur ce port.

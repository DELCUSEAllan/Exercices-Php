# 26 — Mini produit : vote des idées

**Notions :** formulaire, session, fonctions, tableaux, rendu sûr  
**Situation :** Une page permet de voter pour des idées de projet, puis d’afficher le classement.

## Consignes

Partez d’un tableau initial de trois idées. Stockez les votes dans la session. Le formulaire POST transmet l’identifiant d’une idée ; validez le type et l’existence, incrémentez, puis redirigez en 303. Triez le classement décroissant et échappez les titres lors du rendu. Essayez une requête invalide.

## Vérification

Un vote change le classement, le rafraîchissement ne revote pas et un identifiant inconnu ne crée aucune idée.

Depuis la racine du projet, lancez `php -S 127.0.0.1:8000 -t 26-mini-produit`. Puis ouvrez `http://127.0.0.1:8000`. Arrêtez le serveur avant de lancer un autre exercice web sur ce port.

# 21 — Compteur de visite

**Notions :** session_start, $_SESSION, cookie  
**Situation :** Une page affiche le nombre de visites dans la session courante.

## Consignes

Démarrez la session avant le HTML. Incrémentez un compteur et affichez-le. Ajoutez un formulaire POST pour remettre le compteur à zéro ; utilisez une redirection 303 après ce POST pour éviter le renvoi du formulaire au rafraîchissement.

## Vérification

Deux rafraîchissements augmentent le compteur ; le bouton le remet à zéro.

Depuis la racine du projet, lancez `php -S 127.0.0.1:8000 -t 21-visites`. Puis ouvrez `http://127.0.0.1:8000`. Arrêtez le serveur avant de lancer un autre exercice web sur ce port.

# 22 — Vérification de mot de passe

**Notions :** password_hash, password_verify, échappement  
**Situation :** Un compte de démonstration vérifie un mot de passe.

## Consignes

Hachez un mot de passe avec `PASSWORD_DEFAULT`, vérifiez une bonne et une mauvaise tentative. Échappez une chaîne externe avant insertion dans une page HTML. Ne montrez jamais le secret en clair ni le hachage dans la page.

## Vérification

La bonne tentative est vraie, la mauvaise fausse ; le HTML saisi ne s’exécute pas.

Depuis la racine du projet, lancez `php -S 127.0.0.1:8000 -t 22-mot-de-passe`. Puis ouvrez `http://127.0.0.1:8000`. Arrêtez le serveur avant de lancer un autre exercice web sur ce port.

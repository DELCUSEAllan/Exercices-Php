# 17 — Sauvegarde JSON

**Notions :** fichiers, json_encode, json_decode  
**Situation :** Un jeu sauvegarde les préférences dans un fichier temporaire.

## Consignes

Encodez un tableau en JSON avec `JSON_THROW_ON_ERROR`. Écrivez-le dans un fichier de `sys_get_temp_dir`, relisez-le, décodez-le puis supprimez le fichier dans `finally`. Vérifiez les retours des fonctions de fichier.

## Vérification

Le nom du joueur et son thème sont retrouvés après relecture.

Depuis la racine du projet, lancez `php 17-sauvegarde/index.php`. 

# 18 — Heure d’un événement

**Notions :** DateTimeImmutable, fuseaux horaires, diff  
**Situation :** Un tournoi en ligne démarre à une heure UTC.

## Consignes

Créez la date `2026-10-06 18:00:00` en UTC, ajoutez 90 minutes sans modifier l’original, affichez le départ à Paris et la durée. Utilisez `DateTimeImmutable` et `DateTimeZone`.

## Vérification

L’original UTC reste à 18 h ; en octobre, Paris affiche 20 h au départ.

Depuis la racine du projet, lancez `php 18-evenement/index.php`. 

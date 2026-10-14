# 12 — Notifications interchangeables

**Notions :** interface, polymorphisme  
**Situation :** Une application annonce un événement par différents canaux.

## Consignes

Définissez `Notifier` avec `send(string): string`. Implémentez `EmailNotifier` et `ConsoleNotifier`. Une fonction `announce(Notifier $notifier)` doit fonctionner avec les deux sans connaître leur classe.

## Vérification

La même fonction produit deux annonces selon l’objet reçu.

Depuis la racine du projet, lancez `php 12-canaux/index.php`. 

# 10 — Portefeuille de crédits

**Notions :** classe, constructeur promu, propriétés privées  
**Situation :** Un joueur possède des crédits virtuels.

## Consignes

Créez un objet `Wallet` avec propriétaire et solde privés. Ajoutez `credit`, `debit` et `balance`. Refusez les montants non positifs et le découvert avec `InvalidArgumentException`.

## Vérification

Après +50 et −20, le solde vaut 30 ; un débit de 31 échoue.

Depuis la racine du projet, lancez `php 10-portefeuille/index.php`. 

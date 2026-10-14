# 13 — Personnages spécialisés

**Notions :** héritage, parent::, trait  
**Situation :** Un jeu possède des personnages ordinaires et des mages.

## Consignes

Créez une classe `Character` avec `describe`, puis `Mage extends Character` qui ajoute sa spécialité en appelant `parent::describe()`. Un trait `HasLevel` fournit une méthode `levelLabel` utilisée par les deux.

## Vérification

Un mage affiche son nom, sa classe et son niveau.

Depuis la racine du projet, lancez `php 13-personnages/index.php`. 

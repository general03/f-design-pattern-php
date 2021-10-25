# Définition des Design Pattern

Les Design Pattern (patron de conception) sont des architectures logicielles permettant de répondre à des problématiques.
Il existe 3 types de Design Pattern
- création
- structuration
- comportement

<img src="img/3_types_dp.png" />

C'est une bonne pratique de se reposer sur ces modèles, cela apportera également
- Un découpage plus fonctionnel de votre application
- Un code plus clair (mais éclaté dans plusieurs modèles) 
- Un programme plus générique qui gèrera mieux les différents cas d'usage (couche d'abstraction)

# MVC

C'est également une architecture logicielle qui permet de découper le code en plusieurs parties.
Il en existe plusieurs type :
- MVC
- MVT (dérivé de MVC)
- MVVM (.Net)

<img src="img/mvc.png" />

# Pré-requis

Installation de l'environnement de dev
```
docker build -t php7 .
docker run -it --rm --name singleton-php --network host --env-file=.env -v $(pwd):/usr/src/app php7 php index.php
```

Exécuter son code
`docker run -it --rm --name singleton-php php7 index.php`

# Exo 1 : singleton

## Explication

Permet d'utiliser une seule instance de classe pour la réutiliser ultérieurement.

## Sujet

Veuillez mettre en place un singleton pour vous connecter en BDD

# Exo 2 : DAO

## Explication

Est une abstraction de la persistence des données, proche de la BDD. Il est souvent couplé avec PDO
On va retrouver dans cette classe la manière de manipuler nos données (CRUD).
VS Repository : lui est plus proche de la logique métier, il manipule les DAO

## Sujet

Créer un DAO User pour obtenir l'existence d'un pseudo  

# Exo 3 : Factory

## Explication

On délègue la création d'une instance de classe à une autre classe que l'on appelle `factory`
Cela permet de cacher la complexité et le mécanisme qui s'y trouve derrière

## Sujet

Créer un connecteur MYSQL et Postgres


# Exo 4 : Injection des dépendances

## Explication

Lie 2 objets de manière dynamique afin de s'adapter au besoin
On donne une instance à une autre classe pour manipuler les données 

## Sujet

Effectuer une liste de tâche

# Exo 5 : Observeur

## Explication

Basé sur SplSubject et SplObserver de PHP
Permet de faire transiter une information lorsqu'un état change

## Sujet

Faire un mécanisme de notification de message

# Exo 6 : Command

## Explication

Permet de séparer le code à l'origine de l'action et l'action elle même 

## Sujet

Créer un gestionnaire d'information en utilisant une commande à minima Echo et File

# Exo 7 : Strategy

## Explication

On manipule un seul composant pour des comportements (stratégies) différents.
C'est le contexte qui s'occupe de faire le lien entre la classe créée et le fonctionnement demandé

## Sujet

Créer un gestionnaire d'information en utilisant une stratégie à minima Echo et File

# Exo 8 : Decorateur

## Explication

Permet d'ajouter des comportement sur des objets

## Sujet

Réaliser un décorateur qui modifie l'affichage des logs en fonction de la verbosité souhaité

# Exo 9 : Builder

## Explication

Permet de découper la construction d'un objet en partie moins complexe

## Sujet

Construire une maison (toit, porte, fenetre ...) selon ce principe

# Exo 10 : Adapter

## Explication

Fait office d'interface entre 2 objets ne pouvant pas communiquer entre eux

## Sujet 

Constuire un adapter pour afficher la liste des jeux disponibles dans une plateforme de vente en ligne

# Exo 11 : State

## Explication 

Modifit le comportement d'un objet en fonction d'une situation 

## Sujet


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

Créer un gestionnaire d'information en utilisant une commande à minima Log et File

# Exo 7 : Strategy

# Exo 8 : Decorateur

# Exo 9 : Builder

# Exo 10 : Adapter

# Exo 11 : State
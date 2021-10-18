# Pré-requis

Installation de l'environnement de dev
```
docker build -t php7 .
docker run -it --rm --name singleton-php -v $(pwd):/usr/src/app php7 php index.php
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
On va retrouver dans cette classe la manière de manipuler nos données (CRUD)

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
# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [X] Créer un fichier `includes/autoload.php` avec ce contenu :
```php
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});
```
<<<<<<< HEAD
- [X] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`
  
- [X] Créer une classe `Computer` (fichier `classes/Computer.php`)
- [X] Ajouter les propriétés :
  - [X] `components` (composants) de type array
  - [X] `devices` (périphériques) de type array
  - [X] `name` de type string
- [X] Créer une instance de l'objet `Computer` dans `index.php`
- [X] Donner des valeurs aux différentes propriétés de votre objet
- [X] Afficher le contenu de votre objet avec la fonction `var_dump()`
=======
- [ ] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`

- [ ] Créer une classe `Computer` (fichier `classes/Computer.php`)
- [ ] Ajouter les propriétés :
  - [ ] `components` (composants) de type array
  - [ ] `devices` (périphériques) de type array
  - [ ] `name` de type string
- [ ] Créer une instance de l'objet `Computer` dans `index.php`
- [ ] Donner des valeurs aux différentes propriétés de votre objet
- [ ] Afficher le contenu de votre objet avec la fonction `var_dump()`
>>>>>>> f21015b (Clarification du use)

### 1.1 Utiliser des getters et des setters

- [X] Dans l'objet `Computer`, passer toutes les propriétés en `protected`
- [X] Ajouter les méthodes "getters" :
  - [X] `getComponents()` qui renvoie le contenu de la propriété `components`
  - [X] `getDevices()` qui renvoie le contenu de la propriété `devices`
  - [X] `getName()` qui renvoie le contenu de la propriété `name`
- [X] Ajouter les méthodes "setters" :
  - [X] `setComponents($components)` qui met à jour le contenu de la propriété `components` à partir de la variable `$components`
  - [X] `setDevices($devices)` qui met à jour le contenu de la propriété `devices` à partir de la variable `$devices`
  - [X] `setName($name)` qui met à jour le contenu de la propriété `name` à partir de la variable `$name`
- [X] Mettre à jour votre fichier `index.php` pour en conserver le fonctionnement

### 1.2. Espaces de nom et rangement

<<<<<<< HEAD
- [X] Créer un dossier `Computer`
- [X] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [X] Ajouter le `namespace` de cette classe
- [X] Faire en sorte que la classe `Desktop` étende la classe `Computer`
- [X] Dans index.php, créer un objet de type `Desktop` et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer (et lui donner des valeurs différentes)
- [X] Donner des valeurs aux différentes propriétés de votre objet
- [X] Afficher le contenu de votre objet avec la fonction `var_dump()`
  
- [X] Sur le même modèle, créer les classes `Laptop` (ordinateur portable) et `Tablet` (tablette)
- [X] Créer / Instancier des objets de ces deux types dans `index.php` et en afficher le contenu avec `var_dump()`
=======
- [ ] Créer un dossier `Computer`
- [ ] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [ ] Ajouter le `namespace` de cette classe
- [ ] Faire en sorte que la classe `Desktop` étende la classe `Computer` (vous aurez également besoin d'appeler la classe `Computer` avec `use Computer`, juste après le namespace)
- [ ] Dans index.php, créer un objet de type `Desktop` (utiliser également un `use` ou l'appeler par son nom complet `Computer\Desktop`) et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer
- [ ] Donner des valeurs aux différentes propriétés de votre objet
- [ ] Afficher le contenu de votre objet avec la fonction `var_dump()`

- [ ] Sur le même modèle, créer les classes `Laptop` (ordinateur portable) et `Tablet` (tablette)
- [ ] Créer / Instancier des objets de ces deux types dans `index.php` et en afficher le contenu avec `var_dump()`
>>>>>>> f21015b (Clarification du use)

## 2. Classes abstraites

- [X] Rendre la classe `Computer` abstraite (ajouter le mot-clé `abstract` à la déclaration de la classe)
- [X] Constater l'erreur dans le fichier `index.php`
- [X] Enlever l'objet de type `Computer` de vos tests. Il n'est maintenant plus possible d'instancier d'objets `Computer` et il faut désormais utiliser une classe *concrète* pour créer des ordinateurs

- Créer les dossiers et les fichiers des composants
  - [X] Créer le fichier `Component/AbstractComponent.php` et la classe abstraite `AbstractComponent`
  - [X] Y ajouter les propriétés `name` et `brand`, de type string.
  - [X] Ajouter les getters et les setters
  - [X] Créer les fichiers `Component/MotherBoard.php` (carte mère), `Component/Ram.php` (mémoire vive), `Component/Cpu.php` (processeur), `Component/GraphicCard.php` (carte graphique)
  - [X] Créer les classes correspondantes et les faire étendre `AbstractComponent`
  - [X] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setComponents()` de vos objets ordinateurs

- Créer les dossiers et les fichiers des composants et des périphériques
<<<<<<< HEAD
  - [X] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [X] Y ajouter les propriétés `name` et `brand`, de type string.
  - [X] Ajouter les getters et les setters
  - [X] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [X] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [X] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
=======
  - [ ] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [ ] Y ajouter les propriétés `name` et `brand`, de type string.
  - [ ] Ajouter les getters et les setters
  - [ ] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [ ] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
  - [ ] Constater le résultat avec un `var_dump()` pour chacun de vos objets ordinateurs
>>>>>>> f21015b (Clarification du use)


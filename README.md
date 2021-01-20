# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [x] Créer un fichier `includes/autoload.php` avec ce contenu :

```php
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});
```

- [x] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`
- [x] Créer une classe `Computer` (fichier `classes/Computer.php`)
- [x] Ajouter les propriétés :
  - [x] `components` (composants) de type array
  - [x] `devices` (périphériques) de type array
  - [x] `name` de type string
- [x] Créer une instance de l'objet `Computer` dans `index.php`
- [x] Donner des valeurs aux différentes propriétés de votre objet
- [x] Afficher le contenu de votre objet avec la fonction `var_dump()`

### 1.1 Utiliser des getters et des setters

- [x] Dans l'objet `Computer`, passer toutes les propriétés en `protected`
- [ ] Ajouter les méthodes "getters" :
  - [x] `getComponents()` qui renvoie le contenu de la propriété `components`
  - [x] `getDevices()` qui renvoie le contenu de la propriété `devices`
  - [x] `getName()` qui renvoie le contenu de la propriété `name`
- [x] Ajouter les méthodes "setters" :
  - [x] `setComponents($components)` qui met à jour le contenu de la propriété `components` à partir de la variable `$components`
  - [x] `setDevices($devices)` qui met à jour le contenu de la propriété `devices` à partir de la variable `$devices`
  - [x] `setName($name)` qui met à jour le contenu de la propriété `name` à partir de la variable `$name`
- [x] Mettre à jour votre fichier `index.php` pour en conserver le fonctionnement

### 1.2. Espaces de nom et rangement

- [x] Créer un dossier `Computer`
- [x] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [x] Ajouter le `namespace` de cette classe
- [x] Faire en sorte que la classe `Desktop` étende la classe `Computer`
- [x] Dans index.php, créer un objet de type `Desktop` et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer (et lui donner des valeurs différentes)
- [x] Donner des valeurs aux différentes propriétés de votre objet
- [x] Afficher le contenu de votre objet avec la fonction `var_dump()`
- [x] Sur le même modèle, créer les classes `Laptop` (ordinateur portable) et `Tablet` (tablette)
- [x] Créer / Instancier des objets de ces deux types dans `index.php` et en afficher le contenu avec `var_dump()`

## 2. Classes abstraites

- [x] Rendre la classe `Computer` abstraite (ajouter le mot-clé `abstract` à la déclaration de la classe)
- [x] Constater l'erreur dans le fichier `index.php`
- [x] Enlever l'objet de type `Computer` de vos tests. Il n'est maintenant plus possible d'instancier d'objets `Computer` et il faut désormais utiliser une classe _concrète_ pour créer des ordinateurs

- Créer les dossiers et les fichiers des composants

  - [x] Créer le fichier `Component/AbstractComponent.php` et la classe abstraite `AbstractComponent`
  - [x] Y ajouter les propriétés `name` et `brand`, de type string.
  - [x] Ajouter les getters et les setters
  - [x] Créer les fichiers `Component/MotherBoard.php` (carte mère), `Component/Ram.php` (mémoire vive), `Component/Cpu.php` (processeur), `Component/GraphicCard.php` (carte graphique)
  - [x] Créer les classes correspondantes et les faire étendre `AbstractComponent`
  - [x] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setComponents()` de vos objets ordinateurs

- Créer les dossiers et les fichiers des composants et des périphériques
  - [x] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [x] Y ajouter les propriétés `name` et `brand`, de type string.
  - [x] Ajouter les getters et les setters
  - [x] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [x] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [x] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs

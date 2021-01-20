# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [X] Créer un fichier `includes/autoload.php` avec ce contenu :
```php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP 
    // $class = str_replace($class, '\\', '/');
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
=======
- [ ] Créer un dossier `Computer` dans le dossier `classes`
>>>>>>> 36b925c (clarification des dossiers attendus)
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

<<<<<<< HEAD
- Créer les dossiers et les fichiers des composants et des périphériques
<<<<<<< HEAD
  - [X] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [X] Y ajouter les propriétés `name` et `brand`, de type string.
  - [X] Ajouter les getters et les setters
  - [X] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [X] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [X] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
=======
=======
- Créer les dossiers et les fichiers des périphériques
>>>>>>> 32343a4 (énoncés des exercices 3 et 4)
  - [ ] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [ ] Y ajouter les propriétés `name` et `brand`, de type string.
  - [ ] Ajouter les getters et les setters
  - [ ] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [ ] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
  - [ ] Constater le résultat avec un `var_dump()` pour chacun de vos objets ordinateurs
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f21015b (Clarification du use)

=======
>>>>>>> 36b925c (clarification des dossiers attendus)
=======

## 3. Interfaces

- Nous allons ajouter une interface pour nous assurer que nos ordinateurs, nos composants et nos périphériques aient certaines méthodes qui vont nous être nécessaires.
  - [ ] Créer une branche `votreNom-exo-3`
  - [ ] Créer le dossier `classes/Interfaces`, nous allons y ajouter nos interfaces
  - [ ] Y créer le fichier `HasNameInterface.php` et l'interface `HasNameInterface`
    - [ ] Les objets qui implémentent cette interface doivent implémenter la méthode `getName` avec la signature suivante `public function getName(): ?string`
    - [ ] Et la méthode `setName` avec la signature suivante `public function setName(?string $name): HasNameInterface`
    - [ ] Ajouter le `implements HasNameInterface` dans vos classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [ ] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [ ] Sur le même modèle, créer le fichier `HasBrandInterface.php` et l'interface `HasBrandInterface` avec les méthodes :
    - [ ] `getBrand` avec la signature `public function getBrand(): ?string`
    - [ ] `setBrand` avec la signature `public function setBrand(?string $brand): HasBrandInterface`
    - [ ] Ajouter le `implements HasBrandInterface` dans vos classes `AbstractDevice` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [ ] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 4. Traits

- Maintenant que nous avons forcé nos objets à avoir certaines méthodes, nous allons simplifier l'implémentation de ces méthodes en utilisant des traits (en somme, nous regroupons le code que nous avons écrit plusieurs fois et que nous avons forcé à être identique d'un fichier à l'autre)
  - [ ] Créer une branche `votreNom-exo-4`
  - [ ] Créer le dossier `classes/Traits`, nous allons y ranger nos traits.
  - [ ] Y créer le fichier `HasNameTrait.php` et le trait `HasNameTrait`
    - [ ] Y déplacer la déclaration de la propriété `$name`
    - [ ] Y déplacer la déclaration de la méthode `getName`
    - [ ] Y déplacer la déclaration de la méthode `setName`
    - [ ] Appeler le trait `HasNameTrait` dans les classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [ ] Supprimer les autres déclaration de la propriété `$name` et des méthodes `getName`et `setName`
    - [ ] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [ ] Sur le même modèle créer le fichier `HasBrandTrait.php` et le trait `HasBrandTrait`
    - [ ] Y déplacer la déclaration de la propriété `$brand`
    - [ ] Y déplacer la déclaration de la méthode `getBrand`
    - [ ] Y déplacer la déclaration de la méthode `setBrand`
    - [ ] Appeler le trait `HasBrandTrait` dans les classes `AbstractDevice` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [ ] Supprimer les autres déclaration de la propriété `$brand` et des méthodes `getBrand`et `setBrand`
    - [ ] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
>>>>>>> 32343a4 (énoncés des exercices 3 et 4)

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
- [X] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`

- [X] Créer une classe `Computer` (fichier `classes/Computer.php`)
- [X] Ajouter les propriétés :
  - [X] `components` (composants) de type array
  - [X] `devices` (périphériques) de type array
  - [X] `name` de type string
- [X] Créer une instance de l'objet `Computer` dans `index.php`
- [X] Donner des valeurs aux différentes propriétés de votre objet
- [X] Afficher le contenu de votre objet avec la fonction `var_dump()`

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

- [X] Créer un dossier `Computer` dans le dossier `classes`
- [X] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [X] Ajouter le `namespace` de cette classe
- [X] Faire en sorte que la classe `Desktop` étende la classe `Computer` (vous aurez également besoin d'appeler la classe `Computer` avec `use Computer`, juste après le namespace)
- [X] Dans index.php, créer un objet de type `Desktop` (utiliser également un `use` ou l'appeler par son nom complet `Computer\Desktop`) et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer
- [X] Donner des valeurs aux différentes propriétés de votre objet
- [X] Afficher le contenu de votre objet avec la fonction `var_dump()`

- [X] Sur le même modèle, créer les classes `Laptop` (ordinateur portable) et `Tablet` (tablette)
- [X] Créer / Instancier des objets de ces deux types dans `index.php` et en afficher le contenu avec `var_dump()`

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

- Créer les dossiers et les fichiers des périphériques
  - [X] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [X] Y ajouter les propriétés `name` et `brand`, de type string.
  - [X] Ajouter les getters et les setters
  - [X] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [X] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [X] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
  - [X] Constater le résultat avec un `var_dump()` pour chacun de vos objets ordinateurs

## 3. Interfaces

- Nous allons ajouter une interface pour nous assurer que nos ordinateurs, nos composants et nos périphériques aient certaines méthodes qui vont nous être nécessaires.
  - [X] Créer une branche `votreNom-exo-3`
  - [X] Créer le dossier `classes/Interfaces`, nous allons y ajouter nos interfaces
  - [X] Y créer le fichier `HasNameInterface.php` et l'interface `HasNameInterface`
    - [X] Les objets qui implémentent cette interface doivent implémenter la méthode `getName` avec la signature suivante `public function getName(): ?string`
    - [X] Et la méthode `setName` avec la signature suivante `public function setName(?string $name): HasNameInterface`
    - [X] Ajouter le `implements HasNameInterface` dans vos classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [X] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [X] Sur le même modèle, créer le fichier `HasBrandInterface.php` et l'interface `HasBrandInterface` avec les méthodes :
    - [X] `getBrand` avec la signature `public function getBrand(): ?string`
    - [X] `setBrand` avec la signature `public function setBrand(?string $brand): HasBrandInterface`
    - [X] Ajouter le `implements HasBrandInterface` dans vos classes `AbstractDevice` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [X] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [X] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 4. Traits

- Maintenant que nous avons forcé nos objets à avoir certaines méthodes, nous allons simplifier l'implémentation de ces méthodes en utilisant des traits (en somme, nous regroupons le code que nous avons écrit plusieurs fois et que nous avons forcé à être identique d'un fichier à l'autre)
  - [X] Créer une branche `votreNom-exo-4`
  - [X] Créer le dossier `classes/Traits`, nous allons y ranger nos traits.
  - [X] Y créer le fichier `HasNameTrait.php` et le trait `HasNameTrait`
    - [X] Y déplacer la déclaration de la propriété `$name`
    - [X] Y déplacer la déclaration de la méthode `getName`
    - [X] Y déplacer la déclaration de la méthode `setName`
    - [X] Appeler le trait `HasNameTrait` dans les classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [X] Supprimer les autres déclaration de la propriété `$name` et des méthodes `getName`et `setName`
    - [X] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [X] Sur le même modèle créer le fichier `HasBrandTrait.php` et le trait `HasBrandTrait`
    - [X] Y déplacer la déclaration de la propriété `$brand`
    - [X] Y déplacer la déclaration de la méthode `getBrand`
    - [X] Y déplacer la déclaration de la méthode `setBrand`
    - [X] Appeler le trait `HasBrandTrait` dans les classes `AbstractDevice` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [X] Supprimer les autres déclaration de la propriété `$brand` et des méthodes `getBrand`et `setBrand`
    - [X] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [X] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 5. instanceof et validation de données

- Nos objets sont maintenant plus courts et nous avons évité de dupliquer du code, nous pouvons commencer à ajouter d'autres éléments fonctionnels. Dans un premier temps, nous allons ajouter un objet de validation de nos objets de type `Computer`.
  - [X] Créer une branche `votreNom-exo-5`
  - [X] Ajouter une interface `ValidatorInterface` dans le dossier `Interfaces`
  - [X] Ajouter la signature suivante, qui va devoir être respectée par nos validateurs : `public function validate(Computer $computer): bool;`
  - [X] Créer le dossier `classes/Validator`, nous allons y ranger nos validateurs.
  - [X] Créer un fichier `ComputerValidator.php` dans ce dossier et créer la classe `ComputerValidator`
  - [X] Cette classe doit implémenter l'interface `ValidatorInterface` et avoir la méthode correspondante
  - [X] Dans cette méthode `validate`, dont le premier paramètre est un objet de type `Computer`, nous allons vérifier :
    - Que le computer passé en paramètre contienne dans ses composants :
      - [ ] un objet `MotherBoard`,
      - [ ] un objet `Ram`, 
      - [ ] un objet `Cpu`,
      - [ ] et 0 ou un objet `GraphicCard`
    - Que le computer passé en paramètre contienne dans ses périphériques :
      - [ ] un objet `Keyboard`,
      - [ ] un objet `Mouse`, 
      - [ ] 0 ou un objet `Speaker`
  - [ ] Instancier ce validateur dans `index.php` et utiliser la méthode `validate` sur vos différents ordinateurs pour vérifier qu'ils sont valides
  - [ ] Faire en sorte d'avoir au moins un ordinateur qui ne soit pas valide
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github. Utiliser votre branche de l'exercice 4 comme base (plutôt que `main`)
  
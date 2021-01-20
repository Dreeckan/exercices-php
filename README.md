# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [ ] Créer un fichier `includes/autoload.php` avec ce contenu :

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
- [x] Ajouter les méthodes "getters" :
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
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
        Créer le dossier classes/Interfaces, nous allons y ajouter nos interfaces

3.  Interfaces
    Nous allons ajouter une interface pour nous assurer que nos ordinateurs, nos composants et nos périphériques aient certaines méthodes qui vont nous être nécessaires.
    Créer une branche votreNom-exo-3

Créer le dossier classes/Interfaces, nous allons y ajouter nos interfaces

Y créer le fichier HasNameInterface.php et l'interface HasNameInterface

Les objets qui implémentent cette interface doivent implémenter la méthode getName avec la signature suivante public function getName(): ?string
Et la méthode setName avec la signature suivante public function setName(?string $name): HasNameInterface
Ajouter le implements HasNameInterface dans vos classes AbstractDevice, Computer et AbstractComponent (attention au namespace et au use)
Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
Sur le même modèle, créer le fichier HasBrandInterface.php et l'interface HasBrandInterface avec les méthodes :

getBrand avec la signature public function getBrand(): ?string
setBrand avec la signature public function setBrand(?string $brand): HasBrandInterface
Ajouter le implements HasBrandInterface dans vos classes AbstractDevice et AbstractComponent (attention au namespace et au use)
Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github

4. Traits
   Maintenant que nous avons forcé nos objets à avoir certaines méthodes, nous allons simplifier l'implémentation de ces méthodes en utilisant des traits (en somme, nous regroupons le code que nous avons écrit plusieurs fois et que nous avons forcé à être identique d'un fichier à l'autre)
   Créer une branche votreNom-exo-4

Créer le dossier classes/Traits, nous allons y ranger nos traits.

Y créer le fichier HasNameTrait.php et le trait HasNameTrait

Y déplacer la déclaration de la propriété $name
Y déplacer la déclaration de la méthode getName
Y déplacer la déclaration de la méthode setName
Appeler le trait HasNameTrait dans les classes AbstractDevice, Computer et AbstractComponent (attention aux namespace et aux use)
Supprimer les autres déclaration de la propriété $name et des méthodes getNameet setName
Vérifier que votre code fonctionne toujours (et corriger si besoin)
Sur le même modèle créer le fichier HasBrandTrait.php et le trait HasBrandTrait

Y déplacer la déclaration de la propriété $brand
Y déplacer la déclaration de la méthode getBrand
Y déplacer la déclaration de la méthode setBrand
Appeler le trait HasBrandTrait dans les classes AbstractDevice et AbstractComponent (attention aux namespace et aux use)
Supprimer les autres déclaration de la propriété $brand et des méthodes getBrandet setBrand
Vérifier que votre code fonctionne toujours (et corriger si besoin)
Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github

5. instanceof et validation de données

- Nos objets sont maintenant plus courts et nous avons évité de dupliquer du code, nous pouvons commencer à ajouter d'autres éléments fonctionnels. Dans un premier temps, nous allons ajouter un objet de validation de nos objets de type `Computer`.
  - [x] Créer une branche `votreNom-exo-5`
  - [x] Ajouter une interface `ValidatorInterface` dans le dossier `Interfaces`
  - [x] Ajouter la signature suivante, qui va devoir être respectée par nos validateurs : `public function validate(Computer $computer): bool;`
  - [x] Créer le dossier `classes/Validator`, nous allons y ranger nos validateurs.
  - [x] Créer un fichier `ComputerValidator.php` dans ce dossier et créer la classe `ComputerValidator`
  - [x] Cette classe doit implémenter l'interface `ValidatorInterface` et avoir la méthode correspondante
  - [ ] Dans cette méthode `validate`, dont le premier paramètre est un objet de type `Computer`, nous allons vérifier :
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

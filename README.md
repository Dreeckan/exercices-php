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
    - [x] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [X] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 4. Traits

- Maintenant que nous avons forcé nos objets à avoir certaines méthodes, nous allons simplifier l'implémentation de ces méthodes en utilisant des traits (en somme, nous regroupons le code que nous avons écrit plusieurs fois et que nous avons forcé à être identique d'un fichier à l'autre)
  - [X] Créer une branche `votreNom-exo-4`
  - [X] Créer le dossier `classes/Traits`, nous allons y ranger nos traits.
  - [X] Y créer le fichier `HasNameTrait.php` et le trait `HasNameTrait`
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

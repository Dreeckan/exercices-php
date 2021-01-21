## autoload

Cette fonction nous permet d’enregistrer une ou plusieurs fonctions qui vont être mises
dans une file d’attente et que le PHP va appeler automatiquement dès qu’on va essayer
d’instancier une classe

## public, protected, private

Les propriétés, méthodes ou constantes définies avec le mot clef `public` vont être accessibles partout, c’est-à-dire depuis l’intérieur ou l’extérieur de la classe.

Les propriétés, méthodes ou constantes définies avec le mot clef `private` ne vont être accessibles que depuis l’intérieur de la classe qui les a définies.

Les propriétés, méthodes ou constantes définies avec le mot clef `protected` ne vont être accessibles que depuis l’intérieur de la classe qui les a définies ainsi que depuis les classes qui en héritent ou la classe parente. Nous reparlerons du concept d’héritage dans la prochaine leçon.

## des getters et des setters

les méthodes qui servent à définir / modifier / mettre à jour une valeur sont appelées des `setters`et on fera commencer leur nom par `set`.

les méthodes qui servent à récupérer des valeurs sont appelées des `getters` et on fera commencer leur nom par `get`.

## namespace

Ils agissent un peu comme des dossiers. Ils vous permettent d'avoir 2 classes du même nom dans votre programme, du temps qu'elles sont dans des namespaces différents
`Les namespaces permettent d'éviter les conflits si 2 classes ont le même nom.`

## extends

Pour procéder à un héritage (c'est-à-dire faire en sorte qu'une classe hérite des attributs et méthodes d'une autre classe), il suffit d'utiliser le mot-clé `extends`.
Vous déclarez votre classe comme d'habitude (class MaClasse) en ajoutant extends NomDeLaClasseAHeriter comme ceci : `class Desktop extends Computer`
Desktop devient la fille et donc Computer la mere
Comme dans la réalité, une mère peut avoir plusieurs filles, mais une fille ne peut avoir plusieurs mères

## use

aliaser(/importer) les constantes, fonctions, classes, interfaces, et les espaces de noms.

## Classes abstraites (abstract)

On ne pourra pas se servir directement de la classe. La seule façon d'exploiter ses méthodes est de créer une classe héritant de la classe abstraite.
Nous ne créerons jamais d'objet `Computer`, mais uniquement des objets `Desktop`, `Laptop`et `Tablet` En effet, à quoi cela nous servirait d'instancier la classe `Computer` si notre but est de créer un tel type de `Computer` ?

Nous allons donc considérer la classe `Computer` comme étant une classe modèle dont toute classe fille possédera les méthodes et attributs.

## Interfaces

Techniquement, une interface est une classe entièrement abstraite.
Son rôle est de décrire un comportement à notre objet. Les interfaces ne doivent pas être confondues avec l'héritage : l'héritage représente un sous-ensemble (exemple : `Laptop` est un sous-ensemble de `Computer`). Ainsi, une `voiture` et un `personnage` n'ont aucune raison d'hériter d'une même classe. Par contre, une voiture et un personnage peuvent tous les deux sedéplacer, donc une interface représentant ce point commun pourra être créée.

## Les traits

Les traits sont un moyen pour éviter la duplication de méthodes.

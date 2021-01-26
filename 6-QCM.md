## 6. Questions de cours

Pour chacune des questions, cocher **la** case qui correspond (il y a toujours une seule bonne réponse). Pour cocher une cas, remplacer le `[ ]` à côté de la réponse voulue par `[x]`.
Pour tous les exemples utilisant des objets, nous partons du principe qu'il y a un fichier chargé de l'autoload (appel automatique de `require_once` sur les fichiers de nos classes) et qu'il fonctionne à tous les coups.

### 6.1. On peut utilise la pseudo-variable `$this` dans :

- [X] une classe
- [ ] une fonction
- [ ] n'importe où dans le PHP

### 6.2. Une classe doit hériter :

- [ ] d'une ou plusieurs autres classes
- [ ] d'une autre classe
- [X] de zéro ou une autre classe

### 6.2. Que renvoie le code suivant

```php
// Fichier Test.php
class Test {}

// Fichier index.php
$test = new Test();
var_dump($test instanceof Beanie);
```

- [X] une erreur
- [ ] true
- [ ] false

### 6.3. Ce code plante, pourquoi ?

```php
// Fichier Test.php
abstract class Test 
{
    protected $test = 'un test';
     
    abstract public function getValue();
}

// Fichier Child.php
class Child extends Test
{
    public function getTest()
    {
        return $this->test;
    }
}
```

- [ ] La classe `Test` n'a pas de de méthode `getTest()`
- [ ] La propriété `test` n'est pas définie dans la classe `Child`
- [X] la méthode `getValue()` n'est pas définie dans la classe `Child`

### 6.4. Ce code plante, pourquoi ?

```php
// Fichier Interfaces/Test.php
interface Test 
{
    public function getThing();
}

// Fichier Child.php
use Test;

class Child implements Test
{
    protected $thing;
    
    public function getThing()
    {
        return $this->thing;
    }
}
```

- [X] Il manque un namespace à l'interface `Test`
- [ ] L'interface `Test` n'a pas de de méthode `getThing()`
- [ ] La propriété `thing` n'est pas définie dans l'interface `Test`
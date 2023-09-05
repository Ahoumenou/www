## PHP POO

- Classes et Objets
- Espaces de noms
```
Un espace de noms est une technique de gesstion de portée et d'isolation des noms de variables , de fonctions et de classes . On l'utilise en programmation pour éviter le conflits des noms et organiser de manière logique les éléments d'un progamme

```
## Exercice 
Créer deux classes ` Calculator` dans deux fichiers differents : ` math_operations.php` et `string_operations.php`.

créez une méthode `add` dans la classe du fichier math_operations.php. elle additionne deux nombres

créez une méthode `concatenate`  dans la classe du fichier `string_operation.php` . elle joint deux chaînes de caractères.

dans le fichier `index.php` créez deux nombres, deux strings que vous additioner et concatenez respectivement avec les classes appropriées.


Temps: 10min

## Opérateur de Résolution de Porté (::)

Le Scope Resolution Operator aussi connu sous le nom (Paamayim Nekudotayim) ou en terme simple les 2 points, est un opérateur permettant d'acceder  aux constantes, aux propriétés et méthodes statiques d'une classe.

## Propriétés et Méthodes Statiques

En PHP , une propriété ou méthode statique est associée à la classe
elle-même plutôt qu'à une instance particulière de cette classe.
Cela signifie que vous pouver accéder à des propriétés et des méthodes statiques 
sans créer une instance de la classe. Les propriétés et méthodes statiques sont déclarées en utilisant le mot-clé `static`. 

```php
class MaClass{
    public static int $proprieteStatique = 0;

    public static function increment(){
        echo "incrementation";
       self::$proprieteStatique++;
    }
}
MaClass::increment();
echo MaClass::$proprieteStatique;
```
## Les Traits en PHP

- Créez une classe ` Personne` . elle a une methode `present` qui affiche "On m'appelle ..."
- Créez une classe ` Employee` . elle a une méthode `work` qui affiche "Je travaille" 
- Créez une classe ` Programmer` . elle a une méthode `code` qui affiche "Je suis un programmeur" 

- Standards de Codage & PSR4
- Constantes de classes
- Propriétés et Méthodes Statiques
- Interfaces & Polymorphisme
- Méthodes Magiques
- Traites
- Classes Anonymes
- Stockage de Variables & Comparaison d'objets
- DocBlock PHP
- Clonage d'objets
- Sérilisation des objets
- Entêtes HTTP
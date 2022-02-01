# Exercice "Premier site"

## Préparation
1. Téléchargez le dossier `premiersite_depart` et mettez-le sur le disque D:. Il s’agit de l’application Web que vous devez faire.
1. Ouvrez l'application Web dans VSCode (_Ouvrir un dossier_).
1. Dans le terminal, executez la commande suivante :
    ```cmd
    php -S localhost:8000
    ```
1. Changez l’extension du fichier `.html` en `.php`.
1. Visualisez la page `index.php` dans le fureteur en utilisant l'adresse `localhost:8000`. Elle devrait bien s’afficher malgré le changement d’extension de fichier.
## Modification
1. Ouvrez la page `index.php` dans VSCode.
1. Dans le **prologue** de la page (au tout début du fichier), ajoutez les balises PHP (ouvrante et fermante) afin de pouvoir ajouter du code.
1. Créez les variables `$nom`, `$couleurFond` et `$couleurTexte` auxquelles vous donnerez des valeurs significatives sous forme de chaines de caractères. (Votre nom et 2 couleurs de votre choix).
1. Créez la variable `$noPhoto` à laquelle vous donnerez la valeur suivante : `rand(1,3)`.
1. Testez votre code. Il ne devrait y avoir aucun changement. Regardez également la source de la page résultante pour constater qu'elle n'a pas changé.
1. Dans le corps de la page, remplacez le nom de _Rita Raté_ par le code suivant :
    ```php
    <?php echo $nom; ?>
    ```
1. Testez votre code. Votre nom devrait aparaître.
1. Dans le corps de la page, faites afficher les autres variables de la même façon aux endroit qui vous semblent appropriés.
1. Testez votre code. Faites rafraîchir la page à plusieurs reprises pour faire changer la photo automatiquement.

## Amélioration
1. Changez les valeurs des variables ainsi que les photos (prenez de petites photos sur Internet). 
1. Essayez de mettre plus de photos et d'adapter le code en conséquence.
1. Testez votre code.

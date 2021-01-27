<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
echo rand(0,50);
echo "<br>";

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
echo rand(50,getrandmax());
echo "<br>";
/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 50, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$rand = rand(0,50);
if($rand <= 25){
    echo "<p>Gagné</p>";
}
else{
    echo "<p>Perdu</p>";
}
echo "<br>";
/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function alea($min, $max){
    $rand = rand($min, $max);
    if($rand>$max - 100 && $rand<$max){
        alea($min,$max);
    }
    else{
        return $rand;
    }
}







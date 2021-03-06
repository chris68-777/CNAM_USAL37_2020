<?php

$pays = [
    'France' => 'Paris',
    'Belgique' => 'Bruxelles',
];

// array_key_exists()
// empty()

function capitalCity(string $nom_pays)
{
    if (array_key_exists($nom_pays, $pays)) {
        return $pays[$nom_pays];
    }

    return "Capitale inconnue";  // le nom de la capitale
}


echo capitalCity('France'); // affiche Paris
echo capitalCity('Belgique'); // affiche Bruxelles
echo capitalCity('Suisse'); // affiche Capitale inconnue
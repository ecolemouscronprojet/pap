<?php

echo '<h1>Exercice N°1</h1>';

$valeurs = [
    'maison',
    'voiture',
    'marque' => [
        'peugeot',
        'citroen',
        'model' => [
            'passat',
            'c4'
        ]
    ]
];

echo '<pre>';
print_r($valeurs['marque']['model'][1]);


echo '<h1>Exercice N°2</h1>';


$nombres = [25, 30];

echo $nombres[0] + $nombres[1];

echo '<h1>Exercice N°3</h1>';

$marques = ['peugeot', 'citroen'];

$marques[] = 'Kia';

echo '<pre>';
print_r($marques);


echo '<h1>Exercice N°4</h1>';

$meubles = ['table', 'bibliothèque', 'armoire', 'dressing'];

unset($meubles[2]);

echo '<pre>';
print_r($meubles);


echo '<h1>Exercice N°5</h1>';

$nb = 16;

if ($nb % 5 == 0) {
    echo 'Nombre divisible par 5';
} else {
    echo 'Nombre non divisible par 5';
}


echo '<h1>Exercice N°6</h1>';


$users = [
    [
        'firstname' => 'Bob',
        'lastname' => 'Roger',
        'address' => [
            [
                'street' => 'rue de la paix',
                'number' => '18',
                'city' => 'Mouscron',
                'zipcode' => '7700'
            ]
        ]
    ]
];

echo $users[0]['firstname'] . ' ' . $users[0]['lastname'];
echo '<br>';
echo $users[0]['address'][0]['number'] . ' ' . $users[0]['address'][0]['street'];


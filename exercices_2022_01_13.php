<?php

$users = [
    [
        'lastname' => 'John',
        'username' => 'Doe',
        'birthday' => '2000-01-01',
        'addresses' => [
            [
                'number' => 22,
                'street' => 'rue des poires',
                'zipcode' => '7780',
                'city' => 'Comines'
            ],
            [
                'number' => 30,
                'street' => 'Chemin des pommes',
                'zipcode' => '7700',
                'city' => 'Mouscron'
            ],

        ]
    ],
    [
        'lastname' => 'Bob',
        'username' => 'Dylan',
        'birthday' => '1988-03-24',
        'addresses' => [],
        [
            [
                "points" => [
                    2, 5, 8
                ]
            ]
        ]
    ]
];

echo '<pre>';
if($users[1]['lastname'] == 'Bob') {
    echo "vrai";
} else {
    echo "faux";

}


// $address =  $users[0]['addresses'][1];
// echo $address['number'] . ' '. $address['street'] . ' '. $address['zipcode'] . ' '. $address['city'] . ' ';


// echo $users[1]['birthday'];
//echo $users[0]['lastname'];
//echo '<br>';
//echo $users[1]['lastname'];

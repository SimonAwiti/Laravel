<?php

$nbaPlayers = [
    [
        'name' => 'Lebron James',
        'Team' => 'Lakers',
        'Age' => '39'
    ],
    [
        'name' => 'Michael Jordan',
        'Team' => 'Bulls',
        'Age' => '50'
    ],
    [
        'name' => 'Scot Pippen',
        'Team' => 'Bulls',
        'Age' => '52'
    ]
    ];

    foreach($nbaPlayers as $nbaPlayer){
        if ($nbaPlayer['Team'] === 'Bulls'){
            echo $nbaPlayer['name'];
        }
    }
?>
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

function filterByTeam($nbaPlayers){
    //filters players by team

    $fileredPlayers = [];

    foreach($nbaPlayers as $nbaPlayer){
        if ($nbaPlayer['Team'] === 'Bulls'){
            $fileredPlayers[] = $nbaPlayer;
        }
    }
    return $fileredPlayers;
}


foreach (filterByTeam($nbaPlayers) as $nbaPlayer){
    echo $nbaPlayer['name']."<br>";
}
    
?>
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

function filteredPlayers($nbaPlayers, $team){
    //filters players by teams

    $filteredByTeams = [];

    foreach($nbaPlayers as $nbaplayer){
        if ($nbaplayer['Team'] === $team){
            $filteredByTeams[] = $nbaplayer;
        }
    }
    return $filteredByTeams;
}

foreach(filteredPlayers($nbaPlayers, 'Bulls') as $nbaplayer){
    echo $nbaplayer['name']."<br>";
}
    
?>
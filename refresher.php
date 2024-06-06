<?php

$nbaPlayers = [
    [
        'name' => 'Lebron James',
        'Team' => 'Lakers',
        'conference' => 'West',
        'Age' => '39'
    ],
    [
        'name' => 'Anthony Joshua',
        'Team' => 'Lakers',
        'conference' => 'West',
        'Age' => '28'
    ],
    [
        'name' => 'Michael Jordan',
        'Team' => 'Bulls',
        'conference' => 'East',
        'Age' => '50'
    ],
    [
        'name' => 'Scot Pippen',
        'Team' => 'Bulls',
        'conference' => 'East',
        'Age' => '52'
    ]
    ];

function filter($items, $key, $value){
    //filters items
    $flitereditems = [];
    foreach ($items as $item){
        if ($item[$key] === $value){
        $flitereditems[] = $item;
    }
    }
    return $flitereditems;
}

$filtered = filter($nbaPlayers, 'Team', 'Lakers');

foreach ($filtered as $nbaplayer){
    echo $nbaplayer['name']. ", ". $nbaplayer['conference']."<br>";
}
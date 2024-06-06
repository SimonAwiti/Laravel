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

function filter($items, $fn){
    //filters items
    $filtereitems = [];

    foreach ($items as $item){
        if ($fn($item)){
            $filtereitems[] = $item;
        }
    }
    return $filtereitems;
  
}

$filtered = filter($nbaPlayers, function ($nbaplayer){
    return $nbaplayer['Team'] === 'Bulls';
});

foreach ($filtered as $nbaplayer){
    echo $nbaplayer['name']. ", ". $nbaplayer['conference']."<br>";
}
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
    ]
    ];
foreach($nbaPlayers as $nbaPlayer){
    echo $nbaPlayer['name'];
    echo $nbaPlayer['Team']."<br>\n";
}
?>
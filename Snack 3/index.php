<?php

$posts = [

    '19/06/2020' => [
        [
            'title' => 'The Last of Us Parte II',
            'author' => 'Naughty Dog',
            'genre' => 'Survival Action-Adventure'
        ],
        [
            'title' => 'Ghost of Tsushima',
            'author' => 'Playstation Studios',
            'genre' => 'Action-Adventure Open World'
        ],
    ],
    '29/02/2024' => [
        [
            'title' => 'Final Fantasy VII Rebirth',
            'author' => 'Square-Enix',
            'genre' => 'Action - Jrpg'
        ]
    ],
    '15/05/2002' => [
        [
            'title' => 'Final Fantasy X',
            'author' => 'Square-Soft',
            'genre' => 'Jrpg a turni'
        ],
        [
            'title' => 'Kingdom Hearts 2 Final Mix',
            'author' => 'Square-Enix, Disney Interactive',
            'genre' => 'Action - Jrpg'
        ],
        [
            'title' => 'Crash Bandicoot 3 Warped',
            'author' => 'Naughty Dog',
            'genre' => 'Platform'
        ]
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
foreach ($posts as $date => $postList) {
    echo "<h2>{$date}</h2>"; 

    foreach ($postList as $post) {
        echo "<h3>{$post['title']}</h3>";
        echo "<p><strong>Author:</strong> {$post['author']}</p>";
        echo "<p>{$post['genre']}</p>";
        echo "<hr>";
    }
} ?>
</body>
</html>
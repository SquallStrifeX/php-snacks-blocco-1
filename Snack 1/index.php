<?php 
$squadre = [
    [
        'squadra_casa' => 'From Software',
        'squadra_ospite' => 'Santa Monica Studios',
        'punti_casa' => '199',
        'punti_ospite' => '187',
    ],
    [
        'squadra_casa' => 'Naughty Dog',
        'squadra_ospite' => 'Namco Bandai',
        'punti_casa' => '216',
        'punti_ospite' => '143',
    ],
    [
        'squadra_casa' => 'Square-Enix',
        'squadra_ospite' => 'Ubisoft',
        'punti_casa' => '175',
        'punti_ospite' => '151',
    ],
    [
        'squadra_casa' => 'Insomniac',
        'squadra_ospite' => 'Rockstar',
        'punti_casa' => '172',
        'punti_ospite' => '215',
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
foreach ($squadre as $squadra) {
    echo $squadra['squadra_casa']. ' - ' . $squadra['squadra_ospite'] . ' | ' . $squadra['punti_casa'].'-'. $squadra['punti_ospite'].'<br>'.'<br>';
} ?>
</body>
</html>
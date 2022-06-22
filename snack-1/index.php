<?php 
$games=[
    [
    'firstsquad' => 'venezia',
    'secondsquad' => 'milano',
    'pointsFirstSquad' => '60',
    'pointsSecondSquad' => '36'
    ],
    [
    'firstsquad' => 'padova',
    'secondsquad' => 'torino',
    'pointsFirstSquad' => '80',
    'pointsSecondSquad' => '54'
    ],
    [
    'firstsquad' => 'roma',
    'secondsquad' => 'genova',
    'pointsFirstSquad' => '78',
    'pointsSecondSquad' => '68'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i =0 ; $i < count($games); $i++) {?>
        <h3><?php echo $games[$i]['firstsquad'].'-'.$games[$i]['secondsquad'].'|'.$games[$i]['pointsFirstSquad'].'-'.$games[$i]['pointsSecondSquad'];?></h3>
    <?php } ?>
</body>
</html>
<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($name > 3) && is_numeric($age)){
    echo 'accesso riuscito';
} else{
    echo 'accesso negato';
}


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
    <form action="" method="GET">
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="email">
            <input type="text" placeholder="age" name="age">
            <button type="submit">invio</button>
    </form>
        
    <h3><?php echo 'nome: ' . $name; ?></h3>
    <h3><?php echo 'indirizzo email: ' . $email; ?></h3>
    <h3><?php echo ' eta: ' . $age ?></h3>

</body>
</html>
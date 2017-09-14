<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

    // Loop

    // While Loop
    $x = 1;
    while ($x <= 5) {
        echo "Hi there<br>";
        $x++;
    }
    
    // Do-While Loop
    $y = 1;
    do {
        echo "Hello<br>";
        $y++;
    } while ( $y <= 5);

    // For Loop
    /*
    We are able to 're-declare' x because it's a different scope
    */
    for($x = 0; $x <= 10; $x++) {
        echo "Hi<br>";
    }

    // ForEach Loop
    $array = array ("Daniel", "Jane", "Jacob", "John", "Mariane");
    foreach ($array as $elem) {
        echo "My name is " . $elem . ".<br>";
    }

?>

</body>
</html>
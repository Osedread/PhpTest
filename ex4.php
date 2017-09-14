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
// If-Else and Switch statements
$x = 1;

if ($x == 1) {
    echo "Jose is sexy af.";
} elseif ($x != 1) {
    echo "Jose is fracking ugly.";
}
else {
    echo "Meh, he's alright.";
}

$y = 1;

switch ($y == 3) {
    case 1:
        echo "The answer is 1";
    break;
    case "number":
        echo "The answer is number";
    break;
    default:
        echo "There is no answer.";
}

?>




</body>
</html>
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

// $_COOKIE - saved in computer, not sensitive information
// $_SESSION - ends as soon as we close down the browser

setcookie("name", "Jose", time() + 86400);
// To destroy a cookie, we'll use negative (as .., - 1);

// Give the session a name
$_SESSION['name'] = '12';

?>


</body>
</html>
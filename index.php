<?php 
$text = "Trentatre trentini andarono a Trento tutti e trentatre trotterellando";
var_dump($text);
var_dump(strlen($text));
$censure = $_GET['censure'];
var_dump(str_replace($censure, '***', $text));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Word</title>
</head>
<body>
    
</body>
</html>
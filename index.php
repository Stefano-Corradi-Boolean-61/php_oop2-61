<?php

require_once __DIR__ . "/class/User.php";
require_once __DIR__ . "/class/Employee.php";

// lettura del metodo statico
var_dump(User::getCounter());

$pino = new User('Pino', 'De Pini', 20);


var_dump(User::getCounter());

$giuseppe = new Employee('Giuseppe','Verdi',80);
$giuseppe->setLevel(3);
$giuseppe->setSconto();
var_dump(User::getCounter());

var_dump($pino);
var_dump($giuseppe);
var_dump($giuseppe->getName());



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ereditariet&agrave;</title>
</head>
<body>
	
</body>
</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php

$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=edb', 'eizenuser',
    'eizenuser', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

var_dump($dbh);

$res = $dbh->query('SELECT * FROM list');
var_dump($res->fetch());


?>

</body>
</html>
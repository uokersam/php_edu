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

$dsn = 'pgsql';
$host = 'localhost';
$port = '5432';
$dbname = 'edb';
$user = 'eizenuser';
$pass = 'eizenuser';
$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$connection = "$dsn:host=$host;port=$port;dbname=$dbname";

try {
    $dbh = new PDO($connection, $user, $pass, $opts);
} catch (PDOException $e) {
    print_r($e->getMessage());
}

try {
    $res = $dbh->query('SELECT * FROM list');
} catch (PDOException $e) {
    print_r($e->getMessage());
}

if (isset($_POST['elem'])) {
    $elem = $_POST['elem'];

    $stmt = $dbh->prepare('INSERT INTO list VALUES(:elem)');
    $res = $stmt->execute([':elem' => $elem]);
}

?>


<form action="/index.php" method="POST">
  <label>
    <span>Input element</span>
    <input type="text" name="elem">
  </label>
  <button>Submit</button>
</form>


</body>
</html>
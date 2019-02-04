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
<?php
$host = 'localhost';
$user = 'eadmin';
$pass = 'admin';
$db = 'edb';

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
or die ("Could not connect to server\n");

$query = "SELECT * FROM  list";
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
    $Arr[] = $row[0];
}
pg_close($con);
echo json_encode($Arr);
?>
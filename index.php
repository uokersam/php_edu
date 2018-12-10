<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eizenbanum</title>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<h1>Eizenbanum</h1>
<span>testing commit</span>
<?php echo 'php is working' ?>

<ul>
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
</ul>

<form action="/script.php" method="POST">
  <input type="text" placeholder="New li elem" name="newElement">
  <button>Add</button>
</form>

<script src="script.js"></script>

</body>
</html>
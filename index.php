ß<!DOCTYPE html>
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
    <?php include(__DIR__ . 'controllers/controller.php') ?>
</ul>

<form action="/script.php" method="POST">
  <input type="text" placeholder="New li elem" name="newElement">
  <button>Add</button>
</form>

<script src="script.js"></script>

</body>
</html>
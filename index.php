<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<h1>Eizenbanum</h1>
<?php echo 'php is working' ?>

<div class="pigeon"> and styles too!</div>
<form action="/index.php" method="GET">
<input type="text" placeholder='Say something' name="testinput">
<button>Press me</button>
<?php
if (isset($_GET['testinput'])) {
    echo 'yeap, $_GET[] is getting parameters =) <br> and you say: ' . $_GET['testinput'];
}

?>
</form>

<script src="script.js"></script>

</body>
</html>
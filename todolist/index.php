<?php

use Model\DB\Connect;

spl_autoload_register(function ($class_name) {
    require __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
});

$connect = new Connect();

$stmt = $connect->getDb()->prepare('SELECT * FROM list');
$stmt->execute();
$data = $stmt->fetchAll();


function outputElems($data)
{
    foreach ($data as $item) {
        echo $item['text'] . '<br>';
    }
}

outputElems($data);

//
//if (isset($_POST['insertedElemText'])) {
//    $elem = $_POST['insertedElemText'];
//
//    $stmt = $dbh->prepare('INSERT INTO list VALUES(DEFAULT, :elem)');
//    $res = $stmt->execute([':elem' => $elem]);
//}
//
//if (isset($_POST['deleteAll'])) {
//    execute($dbh, 'DELETE FROM list WHERE 1=1');
//}
//
//$data = execute($dbh, 'SELECT * FROM list');
//outputElems($data);

?>

<form action="./index.php" method="POST">
  <label>
    <span>Input element</span>
    <input type="text" name="insertedElemText">
  </label>
  <button>Submit</button>
</form>

<form action="./index.php" method="POST">
  <input type="hidden" name="deleteAll">
  <button>DELETE ALL</button>
</form>

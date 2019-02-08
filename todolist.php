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
function execute($dbh, $sql)
{
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    return $data;
}

function outputElems($data)
{
    foreach ($data as $item) {
        echo $item['text'] . '<br>';
    }
}

if (isset($_POST['insertedElemText'])) {
    $elem = $_POST['insertedElemText'];

    $stmt = $dbh->prepare('INSERT INTO list VALUES(DEFAULT, :elem)');
    $res = $stmt->execute([':elem' => $elem]);
}

if (isset($_POST['deleteAll'])) {
    execute($dbh, 'DELETE FROM list WHERE 1=1');
}

$data = execute($dbh, 'SELECT * FROM list');
outputElems($data);

?>

<form action="./todolist.php" method="POST">
  <label>
    <span>Input element</span>
    <input type="text" name="insertedElemText">
  </label>
  <button>Submit</button>
</form>

<form action="./todolist.php" method="POST">
  <input type="hidden" name="deleteAll">
  <button>DELETE ALL</button>
</form>

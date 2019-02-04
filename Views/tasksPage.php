<?php


if (isset($_POST['insertedElemText'])) {
    $elem = $_POST['insertedElemText'];

    $stmt = $dbh->prepare('INSERT INTO list VALUES(:elem)');
    $res = $stmt->execute([':elem' => $elem]);
}

$data = execute($dbh, 'SELECT * FROM list');
outputElems($data);

?>


<form action="../index.php" method="POST">
  <label>
    <span>Input element</span>
    <input type="text" name="insertedElemText">
  </label>
  <button>Submit</button>
</form>

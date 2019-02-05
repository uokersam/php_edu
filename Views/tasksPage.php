<?php

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
<nav>
  <a href="../Views/pages/theBasics.php">The basics</a>
</nav>


<form action="../index.php" method="POST">
  <label>
    <span>Input element</span>
    <input type="text" name="insertedElemText">
  </label>
  <button>Submit</button>
</form>

<form action="../index.php" method="POST">
  <input type="hidden" name="deleteAll">
  <button>DELETE ALL</button>
</form>
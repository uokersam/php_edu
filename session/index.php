<?php
include_once 'logic.php';
$res = session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
} elseif (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
}

include_once('head.html');
?>


<h1>Tutorial about session in php</h1>
<div>You reload this page
    <span class="red"><?php echo $_SESSION['counter'] ?> </span> times
</div>

</body>
</html>

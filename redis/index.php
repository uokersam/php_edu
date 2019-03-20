<?php
include_once 'redis.php';

$input = htmlspecialchars($_GET['input']);

$client->set('foo', $input);

if ($_GET['delete']) {
    $client->del('foo');
}


?>

    <div>

        <form action="index.php" method="get">
            <input type="text" name="input">
            <button>Submit</button>
        </form>
        <form action="index.php" method="get">
            <input type="hidden" name="delete">
            <button>Delete redis value</button>
        </form>

        <div class="redis-foo__wrapper">
            Redis value: <strong><?php echo $client->get('foo'); ?></strong>
        </div>

    </div>

<?php


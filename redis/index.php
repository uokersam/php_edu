<?php
include_once 'redis.php';

$input = htmlspecialchars($_GET['input']);

$redis->set('foo', $input);

$value = $redis->get('foo');

if ($_GET['delete']) {
    $redis->del('foo');
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
            Redis value: <strong><?php echo $value ?></strong>
        </div>

    </div>

<?php


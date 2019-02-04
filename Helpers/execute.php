<?php
function execute($dbh, $sql)
{
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    return $data;
}
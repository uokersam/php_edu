<?php

namespace Model\DB;

use PDO;
use PDOException;

class Connect
{
    private $dbh;
    private $dsn = 'pgsql';
    private $host = 'localhost';
    private $port = '5432';
    private $dbname = 'edb';
    private $user = 'eizenuser';
    private $pass = 'eizenuser';
    private $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    public function __construct()
    {
        $this->connection
            = "$this->dsn:host=$this->host;port=$this->port;dbname=$this->dbname";

        $this->dbh = new PDO(
            $this->connection,
            $this->user,
            $this->pass,
            $this->opts
        );
    }

    public function getDb()
    {
        return $this->dbh;
    }
}

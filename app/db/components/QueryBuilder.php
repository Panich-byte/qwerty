<?php
namespace App\db\components;

class QueryBuilder{

    public $pdo;

    public function __construct()
    {
        $config = require_once __DIR__ . "/../../../config.php";
        $this->pdo = Connection::make($config);
    }

//    public function getAll($table, $order="")
}

<?php
namespace App\Models;

class Manager {
    protected $table;
    protected $pdo;

    public function __construct(string $table) {
        $this->table = $table;
        $this->pdo = new \PDO("mysql:host=localhost;dbname=workshop;","root","");
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo() {
        return $this->pdo;
    }
}
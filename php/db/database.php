<?php
    class Database{
        protected $name = 'database';
        public $pdo;
        function __construct() {
            $this->pdo = new PDO('sqlite:' . $this->name . '.sqlite');
        }
    }
?>
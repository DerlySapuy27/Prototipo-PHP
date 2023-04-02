<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct() {
        $this ->host = 'localhost';
        $this ->db = 'mvc';
        $this ->user = 'root';
        $this ->password = '';
        $this ->charset = 'utf8mb4';
    }

    function connect(){
        try{
            $connect = "mysql:host=".$this->host.";dbname=".$this->db;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connect, $this-> user, $this->password, $options);
            return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: '. $e->getMessage());
            }
    }
}

?>
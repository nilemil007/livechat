<?php
    // Create database class
    class Database{
        private $user = 'root';
        private $pass = '';
        private $dsn = "mysql:host=localhost;dbname=livechat;charset=UTF8";

        private $db_conn = false;
        private $db = '';

        public function __construct()
        {
            if(!$this->db_conn){
                try {
                    $this->db = new PDO($this->dsn, $this->user, $this->pass);
                    if($this->db){
                        echo "Connected to the database successfully!";
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }else{
                echo 'condition false';
            }
        }
    }

    $db = new Database();
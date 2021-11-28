<?php
    // Create database class
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbname = 'livechat';

        private $db_conn = false;
        private $db = '';

        public function __construct()
        {
            if(!$this->db_conn){
                $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
                if($this->db->connect_error){
                    echo 'database not connect';
                }else{
                    $this->db_conn = true;
                }
            }else{
                echo 'condition false';
            }
        }
    }

    $db = new Database();
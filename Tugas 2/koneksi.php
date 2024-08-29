<?php
    class database{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "siwali_jkb";
        protected $conn;

        public function __construct() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
                if ($this->conn->connect_error) {
                    die ("Connection Failed: " . $this->conn->connect_error);
                }
                echo "Connected Successfully";
        }

        public function baca_data($sql) {
            $result = $this->conn->query($sql);
            return $result;
        }
    }

    $db = new database();
?>
<?php
    class DB{
        public $conn;
        protected $server = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbName = "oto";

        function __construct(){
            $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
            mysqli_select_db($this->conn, $this->dbName);
            mysqli_query($this->conn, "SET NAMES 'utf8");
        }
    }
?>
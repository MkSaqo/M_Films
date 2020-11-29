<?php

class Connection  {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $dbName = 'Filmer';
    protected $db;

    public function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
        $this->db = $con;
        return $this->db;
    }

    public function close() {
        mysqli_close($db);
    }

}

?>
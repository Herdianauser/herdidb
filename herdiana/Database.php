<?php
class Database {

    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "herdiana_db";

    public function connect() {
        $mysqli = new mysqli($this->host,$this->uname,$this->pass,$this->db);
        if ($mysqli->connect_error){
            echo "Gagal terkoneksi ke databese : (".$mysqli->connect_error.")";
        }
        return $mysqli;
    }
}
?>

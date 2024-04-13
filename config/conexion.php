<?php
class Conectar {
    protected $dbh;

    protected function Conexion() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cesteros_db";


        $this->dbh = new mysqli($servername, $username, $password, $dbname);


        if ($this->dbh->connect_error) {
            die("Connection failed: " . $this->dbh->connect_error);
        }

        $this->dbh->set_charset("utf8");

        return $this->dbh;
    }

    public static function ruta() {
        return "http://localhost/cesteros_tocaimuno/views";
    }
}
?>


<?php

namespace Connection;

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "laundry_db";

    protected $koneksi;

    // konstruktor untuk class dari database
    public function __construct() {
        $this->koneksi = new \mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    // method untuk mendapatkan objek koneksi database
    public function getConnection() {
        return $this->koneksi;
    }

    // method untuk tutup database
    public function closeDatabase(){
        $this->koneksi->close();
    }
}
?>

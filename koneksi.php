<?php

// penerapan namespace
namespace Connection;

// Interface untuk database (penerapan interface)
interface DatabaseInterface {
    public function getConnection();
    public function closeConnection();
}

// penerapan class
class Database implements DatabaseInterface {
    // menerapkan properties
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "laundry_db";

    protected $koneksi;

    // konstruktor untuk class dari database (menerapkan prosedur)
    public function __construct() {
        $this->koneksi = new \mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    // fungsi untuk mendapatkan objek koneksi database
    public function getConnection() {
        return $this->koneksi;
    }

    // method untuk tutup database (menerapkan method sekaligus prosedur)
    public function closeConnection(){
        $this->koneksi->close();
    }
}

//menerapkan inheritance
class ExtendedDatabase extends Database {
    // Method tambahan untuk class ExtendedDatabase
    public function backupDatabase() {
        // Mendapatkan koneksi database
        $koneksi = $this->getConnection();

        echo "Backup database berhasil!";
    }

    // Overriding method closeConnection dari Database (menerapkan konsep polymorphism)
    public function closeConnection() {
        parent::closeConnection(); // Memanggil method closeConnection dari class induk
        echo "Koneksi ditutup secara manual."; // Menambahkan pesan tambahan
    }
}

?>
<?php
class DatabaseConnection {
    private ?PDO $connection = null; // [cite: 155]
    
    // Constructor: Membuka koneksi
    public function __construct(string $dsn, string $user, string $pass) { 
        echo "Membuka koneksi database...\n"; // [cite: 156]
        // Inisialisasi koneksi PDO
        $this->connection = new PDO($dsn, $user, $pass); // [cite: 157, 303]
        echo "Koneksi database berhasil dibuka\n"; // [cite: 304]
    }
    
    public function query(string $sql) { 
        return $this->connection->query($sql); // [cite: 159]
    }
    
    // Destructor: Menutup koneksi
    public function __destruct() {
        echo "Menutup koneksi database...\n"; // [cite: 162, 308]
        // Melepas koneksi dengan set null
        $this->connection = null; // [cite: 163, 307]
    }
}

// Catatan: Ganti dengan kredensial database Anda jika ingin uji query sungguhan.
$db = new DatabaseConnection( 
    "mysql:host=localhost;dbname=test", // [cite: 166, 311]
    "root", // [cite: 166, 311]
    "" // [cite: 167, 311]
);

// Di sini objek $db masih hidup, koneksi terbuka, dan siap digunakan.

// Destructor dipanggil otomatis setelah baris ini (akhir skrip)
echo "Program selesai dieksekusi\n";
?>
<?php
class Connection {
    public function __construct() { 
        echo "Koneksi dibuka\n"; // [cite: 105]
    }
    
    public function __destruct() { 
        echo "Koneksi ditutup\n"; // [cite: 107]
    }
}

$c = new Connection(); 

// 1. Destructor dipanggil saat unset($c)
unset($c); // [cite: 110]

// Jika unset($c) dihapus (Langkah 4), destructor dipanggil otomatis di akhir skrip
echo "Selesai\n"; // [cite: 111]
?>
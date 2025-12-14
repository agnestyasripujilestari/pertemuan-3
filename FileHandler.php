<?php
class FileHandler { 
    private $handle; // [cite: 183]

    // Constructor: Membuka file
    public function __construct(string $filename) { 
        echo "Membuka file...\n"; // [cite: 184]
        // Membuka file dalam mode tulis ("w")
        $this->handle = fopen($filename, "w"); // [cite: 185, 330]
        echo "File $filename dibuka\n"; // [cite: 331]
    }

    public function write(string $text) { 
        fwrite($this->handle, $text); // [cite: 187, 334]
    }

    // Destructor: Menutup file
    public function __destruct() { 
        echo "Menutup file...\n"; // [cite: 189, 338]
        fclose($this->handle); // 
    }
}

$f = new FileHandler("output.txt"); // [cite: 192]
$f->write("Halo, ini baris pertama\n"); // [cite: 193]
$f->write("Ini baris kedua\n"); // [cite: 194]

echo "Penulisan selesai\n";

// Destructor dipanggil otomatis setelah baris ini (akhir skrip)
?>
<?php
class Product {
     public function __construct(string $name) { 
        echo "Produk $name dibuat\n"; // [cite: 46]
    }
}

// $p = new Product(); // Panggilan untuk Langkah 1
$p = new Product("Laptop"); // Panggilan untuk Langkah 3 [cite: 49]
?>
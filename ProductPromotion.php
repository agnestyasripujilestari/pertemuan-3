<?php
class Product {
    // Versi dengan Property Promotion (Langkah 1)
    public function __construct( 
        public string $name, // [cite: 63, 236]
        public int $price // [cite: 63, 237]
    ) {} 
    
    // Versi tanpa promotion (untuk perbandingan)
    /*
    public string $name;
    public int $price;
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    */
}

$p = new Product("Laptop", 15000); // [cite: 66]
echo $p->name . " - " . $p->price . "\n";
?>
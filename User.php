<?php
class User {
    // Constructor menggunakan default parameter untuk simulasi overloading
    public function __construct( 
        public string $name = "Guest", // [cite: 82, 268]
        public int $age = 0 // [cite: 82, 269]
    ) {}
}

// Panggil tanpa parameter
$u1 = new User(); // [cite: 85, 272]

// Panggil dua parameter
$u2 = new User("Rani", 22); // [cite: 86]

// Panggil hanya satu parameter
$u3 = new User("Budi");

echo "User 1 (tanpa parameter): " . $u1->name . ", " . $u1->age . "\n"; 
echo "User 2 (dua parameter): " . $u2->name . ", " . $u2->age . "\n"; 
echo "User 3 (satu parameter): " . $u3->name . ", " . $u3->age . "\n"; 
?>
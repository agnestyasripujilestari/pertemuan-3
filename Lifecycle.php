<?php
class Lifecycle {
    public function __construct() { 
        echo "Objek dibuat\n"; // [cite: 131]
    }
    
    public function __destruct() { 
        echo "Objek dihancurkan\n"; // [cite: 133]
    }
}

$obj = new Lifecycle(); // 1. Objek dibuat (referensi 1)
$obj2 = $obj;	// 2. Referensi kedua ($obj dan $obj2 menunjuk objek yang sama) 

unset($obj); // 3. Menghapus referensi pertama
echo "Objek pertama di-unset\n"; // [cite: 138]

unset($obj2); // 4. Menghapus referensi kedua
echo "Semua referensi hilang\n"; // [cite: 139]
?>
<?php

// Definisi kelas Person
class Person {
    private $name;
    private $age;

    // Konstruktor untuk menginisialisasi objek Person dengan nama dan usia
    public function __construct($name, $age) {
        $this->name = $name; // Mengisi properti name
        $this->age = $age;   // Mengisi properti age
    }
    
    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode untuk mendapatkan usia
    public function getAge() {
        return $this->age;
    }

    // Metode untuk memberikan salam dengan nama dan usia
    public function greet() {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

// Membuat objek Person dengan nama "Alex" dan usia 30
$person = new Person("Alex", 30);
// Menampilkan nama menggunakan metode getName()
echo "Name: " . $person->getName() . "<br>";
// Menampilkan usia menggunakan metode getAge()
echo "Age: " . $person->getAge() . "<br>";
// Memanggil metode greet() untuk memberikan salam
$person->greet();
// Tambahkan garis baru untuk pemisahan
echo "<br><br>";

?>

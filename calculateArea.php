<?php

// Mendefinisikan sebuah Interface bersama Shape
interface Shape {
    public function calculateArea(); // Metode yang akan diimplementasikan oleh kelas yang menggunakannya
}

//Membuat kelas Circle yang mengimplementasikan Interface Shape
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius; // Menginisialisasi radius saat objek dibuat
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius; // Menghitung luas lingkaran
    }
}

//Membuat kelas square yang mengimplementasikan interface Shape
class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side; //Menginisialisasi panjang sisi saat objek dibuat
    }

    public function calculateArea() {
        return $this->side * $this->side; //Menghitung luas persegi
    }
}

//Membuat objek Circle radius 30 dan Square panjang sisi 27
    $circle = new Circle(30);
    $square = new Square(27);
//Menampilkan luas lingkaran dan persegi yang telah dibuat
    echo "Circle Area: " . $circle->calculateArea() . "<br>";
    echo "Square Area: " . $square->calculateArea() . "<br>";
    echo "<br>";

?>

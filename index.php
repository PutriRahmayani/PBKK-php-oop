<?php

// Contoh Encapsulation
// Memasukkan file person.php yang berisi definisi kelas Person
require 'person.php';
// Membuat objek Person dengan nama "Alex" dan usia 30
$person = new Person("Alex", 30);
echo "Name: " . $person->getName() . "<br>"; // Menampilkan nama menggunakan metode getName()
echo "Age: " . $person->getAge() . "<br>"; // Menampilkan usia menggunakan metode getAge()
$person->greet(); // Memanggil metode greet() dari objek Person
echo "<br><br>";

// Contoh Inheritance
// Memasukkan file student.php yang berisi definisi kelas Student
require 'student.php';
// Membuat objek Student dengan nama "Putri", usia 20, dan Student ID "30325"
$student = new Student("Putri", 20, "30325");
echo "Name: " . $student->getName() . "<br>"; // Menampilkan nama menggunakan metode getName()
echo "Age: " . $student->getAge() . "<br>"; // Menampilkan usia menggunakan metode getAge()
echo "Student ID: " . $student->getStudentId() . "<br>"; // Menampilkan Student ID menggunakan metode getStudentId()
$student->greet(); // Memanggil metode greet() dari objek Student (kelas anak)
echo "<br><br>";

// Contoh Polymorphism
// Memasukkan file calculateArea.php yang berisi definisi antarmuka Shape, serta kelas Circle dan Square yang mengimplementasikan antarmuka tersebut
require 'calculateArea.php';
// Membuat objek Circle dengan radius 30 dan objek Square dengan panjang sisi 27
$circle = new Circle(30);
$square = new Square(27);

// Menampilkan luas lingkaran dan persegi menggunakan metode calculateArea() yang terpolimorfisme
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Square Area: " . $square->calculateArea() . "<br>";
echo "<br>";

// Contoh Abstraction
// Di sini, kita tidak dapat membuat objek langsung dari kelas abstrak Shape
// Tetapi kita dapat menggunakan konsep abstraksi untuk membuat kelas lain yang mengimplementasikan metode calculateArea().

?>

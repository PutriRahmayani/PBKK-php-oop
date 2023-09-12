<?php

// Definisi kelas Student yang mewarisi dari kelas Person
class Student extends Person {
    private $studentId;

    // Konstruktor untuk menginisialisasi objek Student dengan nama, usia, dan Student ID
    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age); // Memanggil konstruktor kelas dasar (Person)
        $this->studentId = $studentId;    // Mengisi properti studentId
    }

    // Metode untuk mendapatkan Student ID
    public function getStudentId() {
        return $this->studentId;
    }
}

// Membuat objek Student dengan nama "Putri", usia 20, dan Student ID "30325"
$student = new Student("Putri", 20, "30325");
// Menampilkan nama menggunakan metode getName() yang diwarisi dari kelas Person
echo "Name: " . $student->getName() . "<br>";
// Menampilkan usia menggunakan metode getAge() yang diwarisi dari kelas Person
echo "Age: " . $student->getAge() . "<br>";
// Menampilkan Student ID menggunakan metode getStudentId() yang ditambahkan di kelas Student
echo "Student ID: " . $student->getStudentId() . "<br>";
// Memanggil metode greet() yang diwarisi dari kelas Person
$student->greet();
// Tambahkan garis baru untuk pemisahan
echo "<br><br>";

?>

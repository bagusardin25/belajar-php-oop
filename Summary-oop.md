# Roadmap Belajar OOP PHP

## 1. Kelas (Class) dan Objek (Object)
Ini adalah dasar dari OOP. Kelas adalah blueprint, sedangkan objek adalah instance dari kelas tersebut.

**Contoh:**
```php
<?php
class Person {
    // Properti (Properties) - sudah kamu pelajari
    public $name;
    public $age;
    public $address;
}

// Membuat objek dari kelas
$person1 = new Person();
$person1->name = "Agus";
$person1->age = 25;
$person1->address = "Surabaya";
?>
```

## 2. Properti dan Metode (Properties and Methods)  
Properti adalah variabel dalam kelas, sedangkan metode adalah fungsi dalam kelas.

**Contoh:**
```php
<?php
class Person {
    public $name;
    public $age;
    
    // Metode
    public function greet() {
        return "Halo, saya " . $this->name;
    }
    
    public function setAge($umur) {
        $this->age = $umur;
    }
}

$person = new Person();
$person->name = "Agus";
echo $person->greet(); // Output: Halo, saya Agus
?>
```

## 3. Modifikasi Akses (Access Modifiers)
Terdapat tiga jenis: `public` (bisa diakses dari mana saja), `private` (hanya bisa diakses di dalam kelas itu sendiri), dan `protected` (bisa diakses di kelas itu sendiri dan kelas turunannya).

**Contoh:**
```php
<?php
class Person {
    public $name;          // Bisa diakses dari mana saja
    private $age;          // Hanya bisa diakses dari dalam kelas
    protected $address;    // Bisa diakses di kelas ini dan turunannya
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getAge() {
        return $this->age;
    }
}
?>
```

## 4. Konstruktor
Metode khusus yang dipanggil otomatis saat membuat objek. Biasanya digunakan untuk inisialisasi properti.

**Contoh:**
```php
<?php
class Person {
    public $name;
    private $age;
    
    // Konstruktor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function introduce() {
        return "Saya " . $this->name . ", umur " . $this->age . " tahun";
    }
}

$person = new Person("Agus", 25);
echo $person->introduce(); // Output: Saya Agus, umur 25 tahun
?>
```

## 5. Pewarisan (Inheritance)
Kemampuan untuk membuat kelas baru yang mewarisi properti dan metode dari kelas lain.

**Contoh:**
```php
<?php
// Kelas induk
class Person {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function introduce() {
        return "Halo, saya " . $this->name;
    }
}

// Kelas turunan
class Student extends Person {
    private $studentId;
    
    public function __construct($name, $studentId) {
        parent::__construct($name); // Memanggil konstruktor kelas induk
        $this->studentId = $studentId;
    }
    
    public function study() {
        return $this->name . " sedang belajar";
    }
}

$student = new Student("Agus", "12345");
echo $student->introduce(); // Output: Halo, saya Agus
echo $student->study();     // Output: Agus sedang belajar
?>
```

## 6. Enkapsulasi (Encapsulation)
Prinsip menyembunyikan detail implementasi dan hanya mengekspos yang diperlukan melalui interface.

**Contoh:**
```php
<?php
class BankAccount {
    private $balance; // Data penting disembunyikan
    
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }
    
    // Metode untuk menyetor
    public function deposit($amount) {
        if($amount > 0) {
            $this->balance += $amount;
        }
    }
    
    // Metode untuk menarik
    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
    
    // Getter untuk melihat saldo
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
echo $account->getBalance(); // Output: 1500
?>
```

## 7. Abstraksi (Abstraction)
Menggunakan kelas abstrak dan antarmuka untuk mendefinisikan struktur tanpa implementasi lengkap.

**Contoh:**
```php
<?php
// Kelas abstrak
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Metode abstrak harus diimplementasikan di kelas turunan
    abstract public function makeSound();
    
    public function getName() {
        return $this->name;
    }
}

// Kelas turunan
class Dog extends Animal {
    public function makeSound() {
        return "Guk guk!";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName() . " bersuara: " . $dog->makeSound(); 
// Output: Buddy bersuara: Guk guk!
?>
```

## 8. Polimorfisme (Polymorphism)
Objek dari kelas berbeda bisa dianggap sebagai objek dari kelas umum, dan merespon dengan cara berbeda tergantung jenisnya.

**Contoh:**
```php
<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Polimorfisme: objek dari kelas berbeda diolah dengan cara yang sama
$shapes = [
    new Rectangle(5, 4),
    new Circle(3)
];

foreach($shapes as $shape) {
    echo "Luas: " . $shape->calculateArea() . "\n";
}
?>
```

## 9. Konstanta Kelas dan Metode Statis
Konstanta yang tidak berubah dan metode yang bisa dipanggil tanpa membuat objek.

**Contoh:**
```php
<?php
class MathHelper {
    const PI = 3.14159;
    
    public static function calculateCircleArea($radius) {
        return self::PI * $radius * $radius;
    }
    
    public static function square($number) {
        return $number * $number;
    }
}

echo MathHelper::PI; // Output: 3.14159
echo MathHelper::calculateCircleArea(5); // Output: 78.53975
?>
```

## 10. Magic Methods
Metode khusus dalam PHP yang diawali dengan `__` (double underscore) untuk memberikan perilaku khusus pada objek.

**Contoh:**
```php
<?php
class Person {
    private $data = [];
    
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    
    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
    
    public function __toString() {
        return "Nama: " . $this->data['name'] . ", Umur: " . $this->data['age'];
    }
}

$person = new Person();
$person->name = "Agus";
$person->age = 25;
echo $person; // Output: Nama: Agus, Umur: 25
?>
```

## Penjelasan Singkat:
OOP (Object-Oriented Programming) adalah pendekatan pemrograman yang berbasis pada konsep "objek" yang mengandung data dan kode. OOP memungkinkan untuk membuat kode yang lebih modular, dapat digunakan kembali, dan lebih mudah dikelola. Kamu sudah mulai dengan properties, dan roadmap di atas akan membantumu memahami konsep-konsep penting lainnya dalam OOP PHP secara bertahap.

Setelah menguasai semua konsep di atas, kamu bisa melanjutkan ke desain pattern (seperti Singleton, Factory, Observer) dan prinsip SOLID untuk menjadi pengembang OOP PHP yang lebih mahir.
Saya ingin lanjut belajar oop
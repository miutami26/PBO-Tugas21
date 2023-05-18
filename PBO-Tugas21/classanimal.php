<?php
//Class Animal
// class Animal {
// private $nama;
// private $jenis;

// public function __construct($nama, $jenis) {
// $this->nama = $nama;
// $this->jenis = $jenis;
// }

// public function getInfo() {
// return "Nama: " . $this->nama . "\n<br>Jenis: " . $this->jenis;
// }
// }

// // Membuat objek Animal
// $hewan = new Animal("Singa", "Karnivora");

// // Mendapatkan informasi tentang hewan
// echo $hewan->getInfo();


//Class Kucing
// class Animal {
//     protected $nama;
//     protected $jenis;
    
//     public function __construct($nama, $jenis) {
//         $this->nama = $nama;
//         $this->jenis = $jenis;
//     }
    
//     public function getInfo() {
//         return "Nama: " . $this->nama . "\n<br>Jenis: " . $this->jenis;
//     }
// }

// class Cat extends Animal {
//     public function __construct($nama) {
//         parent::__construct($nama, "kucing");
//     }
    
//     public function getInfo() {
//         return parent::getInfo() . "\n<br>Informasi kucing: Kucing adalah hewan yang lincah dan suka bermain.";
//     }
// }

//     // Membuat objek Cat
//     $kucing = new Cat("Mozza");

//     // Mendapatkan informasi tentang kucing
//     echo $kucing->getInfo();

//Class Dog
// class Animal {
// protected $nama;
// protected $jenis;

// public function __construct($nama, $jenis) {
// $this->nama = $nama;
// $this->jenis = $jenis;
// }

// public function getInfo() {
// return "Nama: " . $this->nama . "\n<br>Jenis: " . $this->jenis;
// }
// }

// class Dog extends Animal {
// public function __construct($nama) {
// parent::__construct($nama, "anjing");
// }

// public function getInfo() {
// return parent::getInfo() . "\n<br>Informasi anjing: Anjing adalah hewan peliharaan yang setia dan bisa menjadi teman
// yang baik.";
// // }
// // }

// // Membuat objek Dog
// $anjing = new Dog("Bobby");

// // Mendapatkan informasi tentang anjing
// echo $anjing->getInfo();


//Class Penggabungan

class Animal {
protected $nama;
protected $jenis;

public function __construct($nama, $jenis) {
$this->nama = $nama;
$this->jenis = $jenis;
}

public function getInfo() {
return "<br>Nama: " . $this->nama . "\nJenis: " . $this->jenis;
}
}

class Cat extends Animal {
public function __construct($nama) {
parent::__construct($nama, "kucing");
}

public function getInfo() {
return parent::getInfo() . "\nInformasi kucing: Kucing adalah hewan yang lincah dan suka bermain.";
}
}

class Dog extends Animal {
public function __construct($nama) {
parent::__construct($nama, "anjing");
}

public function getInfo() {
return parent::getInfo() . "\nInformasi anjing: Anjing adalah hewan peliharaan yang setia dan bisa menjadi teman yang
baik.";
}
}

// Membuat objek Animal
$hewan = new Animal("Harimau", "Karnivora<br>");

// Membuat objek Cat
$kucing = new Cat("Mimi");

// Membuat objek Dog
$anjing = new Dog("Bobby");

// Mendapatkan informasi tentang hewan
echo $hewan->getInfo();
echo "\n\n";

// Mendapatkan informasi tentang kucing
echo $kucing->getInfo();
echo "\n\n";

// Mendapatkan informasi tentang anjing
echo $anjing->getInfo();
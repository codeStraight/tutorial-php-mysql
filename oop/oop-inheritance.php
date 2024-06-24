<?php 

    class Product {
        protected $title;
        protected $price;

        public function __construct($title, $price)
        {
            $this->title = $title;
            $this->price = $price;

        }

        // custom metod
        public function getInfo(){
            return "Product Title: " .$this->title . ", Product Price: " . $this->price;
        }
    }

    // book class
    class Book extends Product{

        private $author;

        public function __construct($productTitle, $productPrice, $author)
        {
            Parent::__construct($productTitle, $productPrice);
            $this->author = $author; 
        }

        // custom method
        public function displayBookInfo(){
            return Parent::getInfo() . " Author: " . $this->author;
        }

    }

    // object of a book
    $book = new Book("Book1", "99", "John Doe");
    echo $book->displayBookInfo();


    // book class
    class Electronic extends Product{

        private $brand;

        public function __construct($productTitle, $productPrice, $brand)
        {
            Parent::__construct($productTitle, $productPrice);
            $this->brand = $brand; 
        }

        // custom method
        public function displayElectronicInfo(){
            return Parent::getInfo() . " Brand: " . $this->brand;
        }

    }

    // object of a electronic
    $electronic = new Electronic("Phone", "150", "Brand-x");
    echo '<br>';echo '<br>';
    echo $electronic->displayElectronicInfo();





















?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


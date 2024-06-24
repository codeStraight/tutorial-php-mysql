<?php 

final class Product {
    protected $title;
    protected $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;

    }

    // custom metod
    final public function getInfo(){
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

    public function getInfo(){
        return "Product Title: " .$this->title . ", Product Price: " . $this->price . ", Author: " . $this->author;
    }    



}

// object of a book
$book = new Book("Book1", "99", "John Doe");
echo $book->getInfo();


?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


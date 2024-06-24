<?php

abstract class Product
{
    protected $productTitle;


    public function __construct($productTitle)
    {
        $this->productTitle = $productTitle;
    }

    // custom abstract method
    abstract public function getPrice();
}

class Book extends Product
{
    private $author;
    private $price;

    public function __construct($bookTitle, $bookPrice, $bookAuthor)
    {
        $this->author = $bookAuthor;
        $this->price = $bookPrice;
        Parent::__construct($bookTitle);
    }

    // implement the abstract method here
    public function getPrice()
    {
        return "Book price: " . $this->price;
    }
}
?>

<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


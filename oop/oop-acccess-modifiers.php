<?php 

class Product
{
    public $title;

    private $price;

    protected $category;

    public function __construct($title, $price, $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    // custom method
    public function getInfo()
    {
        return "Product Title: " . $this->title . ", Price: " . $this->price . ", Category: " .$this->category;
    }
}

$product = new Product("T-shirt", "99", "Apparel");

// access a public property
// echo "Product Title: ".$product->title;
echo '<br>';
// access private property
// echo "Product price: ".$product->price;

// access protected property
// echo "Product Category: " . $product->category;

// access properties via public method
echo $product->getInfo();




















?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


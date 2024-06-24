<?php

class Product
{
    public $title;
    public $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    // custom method
    public function getInfo()
    {
        return "Product Title: " . $this->title . ", Price: " . $this->price;
    }
}

$product1 = new Product("Shoes", "100");
echo $product1->getInfo();
echo '<br>';
echo '<br>';

$product2 = new Product("T-shirt", "99");
echo $product2->getInfo();


?>


<?php
echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


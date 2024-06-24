<?php 

    class Product {
        public $originalPrice;
        public static $dsicountRate = 0.1;

        public static function applyDiscount($originalPrice){
            return $originalPrice * (1-self::$dsicountRate);
        }
    }

    $originalPrice = 100;
    $discountedPrice = "Discounted Price: " .Product::applyDiscount($originalPrice);
    echo $discountedPrice;


?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


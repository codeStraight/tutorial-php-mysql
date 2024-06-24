<?php 

    interface CategoryInterface {
        public function getCategoryName();
    }

    class MobilePhone implements CategoryInterface {

        private $categoryName;

        public function __construct()
        {
            $this->categoryName = "electronics";
        }

        // implement the method
        public function getCategoryName(){
            return $this->categoryName;
        }


    }

    class Tshirt implements CategoryInterface {

        private $categoryName;

        public function __construct()
        {
            $this->categoryName = "Apparel";
        }

        // implement the method
        public function getCategoryName(){
            return $this->categoryName;
        }

    }    

    $mobilePhone = new MobilePhone();
    echo $mobilePhone->getCategoryName();
    echo '<br>';

    $tshirt = new Tshirt();
    echo $tshirt->getCategoryName();
    echo '<br>';
?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


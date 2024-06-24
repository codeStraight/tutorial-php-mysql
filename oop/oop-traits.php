<?php 
    trait OrderStatus{
        public function orderStatus(){
            echo "Order status: Processing";
        }
    }

    trait ShippingDate{
        public function shippingDate(){
            echo "Shipping Date: 2023:11:30";
        }
    }    


    class Order {
        use OrderStatus, ShippingDate;

    }

    $order = new Order();
    $order->orderStatus();
    echo '<br>';
    $order->shippingDate();


?>


















<?php
    echo '<p style="margin-top: 10rem; text-align:center">&copy; codeStraight</p>'
?>


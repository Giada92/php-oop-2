<?php 
    require_once __DIR__ . "/User.php";

    class Premium extends User {
        
        private $premium;
        private $discount = 0;

        function __construct($name, $lastname, $gender, $email, $premium){
            parent::__construct($name, $lastname, $gender, $email);
            $this->premium = $premium;
            
        }

        public function setDiscount(){
            $this->discount = $this->premium * 10;
        }

        public function getDiscount(){
            return $this->discount;
        }

    }
/* $p1 = new Premium("Giada", "Meloni", "F", "giadameloni@gmail.com", 1);
$p1->setDiscount();
var_dump($p1); */

//CHIEDERE se con traits posso collegare lo sconto dei product con lo sconto del cliente premium

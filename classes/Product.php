<?php 

    class Product {

        private $name;
        private $category;
        private $brand;
        private $price;
        private $discount = 0;
        private $price_discount = 0;
        private $vote = 0;

        //costruttore
        function __construct($name, $category, $brand, $price){
            $this->name = $name;
            $this->category = $category;
            $this->brand = $brand;
            $this->price = $price;
        }

        //metodi
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setCategory($category){
            $this->category = $category;
        }

        public function getCategory(){
            return $this->category;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setDiscount(){
            if($this->category == "Smartphone"){
                $this->discount = 35;
            }elseif($this->category == "Pc"){
                $this->discount = 25;
            }else {
                $this->discount = 0;
            }
        }

        public function getDiscount(){
            return $this->discount;
        }

        public function setPriceDiscount(){
            if($this->getDiscount() != 0){
                $this->price_discount = $this->price - ($this->price * ($this->getDiscount() / 100));
            }else {
                $this->price_discount;
            }
        }

        public function getPriceDiscount(){
            return $this->price_discount;
        }

        public function setVote($vote){
            $this->vote = $vote;
        }

        public function getVote(){
            return $this->vote;
        }


    }

    $product1 = new Product("Apple", "Smartphone", "iPhone", 700);
    $product1->setName("APPLE iPhone 11 128GB Nero");
    $product1->setDiscount();
    $product1->setPriceDiscount();
    //echo $product1->getDiscount();
    $product1->setVote(4);
    $product1-> setPrice(700);
    var_dump($product1);
    
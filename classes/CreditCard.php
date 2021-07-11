<?php 

    trait CreditCard {
        
        private $numbercard;
        private $expiration_date;
        private $ccv;

        public function setNumbercard($numbercard){
            $this->numbercard = $numbercard;
        }

        public function getNumbercard(){
            return $this->numbercard;
        }

        public function setExpirationDate($expiration_date){
            $this->expiration_date = $expiration_date;
        }

        public function getExpirationDate(){
            return $this->expiration_date;
        }

        public function setCcv($ccv){
            $this->ccv = $ccv;
        }

        public function getCcv(){
            return $this->ccv;
        }
    }
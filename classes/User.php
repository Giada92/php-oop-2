<?php 
    
    class User {
        
        private $name;
        private $lastname;
        private $gender;
        private $email;

        //costruttore
        function __construct($name, $lastname, $gender, $email){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->gender = $gender;
            $this->email = $email;
        }

        //metodi
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setLastname($lastname){
            $this->lastname = $lastname;
        }

        public function getLastname(){
            return $this->lastname;
        }

        public function getFullName(){
            return $this->name . " " . $this->lastname;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setEmail($email) {
            if(strpos($email, ".") == false || strpos($email, "@") == false){
                echo "Email NON valida";
            } else {
                return $this->email = $email;
            }
        }

        public function getEmail(){
            return $this->email;
        }
    }

/* $u1 = new User("Giada", "Meloni", "F", "giadameloni@gmail.com");
//$p1->setEmail($email);
$u1->setEmail("giadameloni@gmail.com");
var_dump($u1); */
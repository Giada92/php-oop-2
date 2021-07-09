<?php 

  class User {
      
        private $name;
        private $lastname;
        private $age;
        private $email;
        private $password;

        //costruttore
        function __construct($name, $lastname, $age, $password = "", $email = "") {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->password = $password;
            $this->email = $email;
        }

        public function setPassword($password) {
            if(strlen($password) < 8){
                echo "Password NON valida - inserisci più caratteri";
            }else {
                return $this->password = $password;
            }
        }

        public function getPassword() {
           return $this->password;
        }

        public function getName() {
            return $this->name;
        }

        public function getLastname() {
            return $this->lastname;
         }

        public function setEmail($email) {
            if(strpos($email, ".") == false || strpos($email, "@") == false){
                echo "Email NON valida";
            } else {
                return $this->email = $email;
            }
        }

  }

/* $user1 = new User ("Gianluigi", "Rossi", 30);
$user1->setPassword("Qualcosa");
$user1->setEmail("neri@gmail.com");
var_dump($user1); */
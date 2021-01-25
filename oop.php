<?php

    class Person {

        private $name;
        private $email;

        public static $species = "human";
        private static $ageLimit = 40;


        public function __construct($name, $email){
            $this->name = $name;
            $this->email= $email;
            echo __CLASS__.' created<br>';
        }

        public static function getAgeLimit() {
            return self::$ageLimit;
        }
        

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }


        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }


        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
    }

    /*
    #NO Inheritance

    $person1 = new Person('Johnny', 'Doerty@gmail.com');

    echo $person1->getName();
    echo $person1->getEmail();
    echo "<br>";

    $person1->setName("John Doe");
    $person1->setEmail("jdoe@gmail.com");


    echo $person1->getName();
    echo $person1->getEmail();
    echo "<br>";

    */

    # Inheritance

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email);
            echo __CLASS__.' created<br>';

            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }
    }


    $customer1 = new Customer('Johnny', 'jd@gmail.com', 250);

    echo $customer1->getName();
    echo $customer1->getEmail();
    echo $customer1->getBalance();
    echo "<br>";


    #Static

    echo Person::$species;
    echo Person::getAgeLimit();







?>
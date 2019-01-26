<?php
    class User {
        private $name;
        private $age;

        // Runs when a object is created/instantiated
        public function __construct(){
            echo 'Class' . __CLASS__ . ' instantiated<br>';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello(){
            return $this->name . ' Says Hello';
        }

        // Called when no other references to a certain object
        // Used for cleanup, closing connections, etc
        public function __destruct(){
            echo 'destructor ran...';
        }
    }

    $user1 = new User('Rodrigo', 24);
    echo $user1->name . ' is ' . $user1->age . ' years old';
    echo '<br>';
    echo $user1->sayHello();

    echo '<br>';

    $user2 = new User('Castro', 24);
    echo $user2->name . ' is ' . $user2->age . ' years old';
    echo '<br>';
    echo $user2->sayHello();
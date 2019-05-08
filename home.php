<?php
// Array
$bikes = array("Kawasaki", "Yamaha", "Honda", "Suzuki", "Ducati");

// Associative array
$age = array("Ted"=>42, "Jeffrey"=>34, "John"=>52);

// Object
class Person {
    public function __construct($firstname, $lastname, $age, $city){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->city = $city;
    }
}

$me = new Person("Christophe","Schevers",30,"Lummen");

var_dump($me);
?>
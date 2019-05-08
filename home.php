<?php
// Array
$bikes = array("Kawasaki", "Yamaha", "Honda", "Suzuki", "Ducati");

// Associative array
$ageArray = array("Ted"=>42, "Jeffrey"=>34, "John"=>52);

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

// For loop
for ($i = 0; $i < 1; $i++){
    array_push($bikes, "KTM");
    print_r($bikes);

    $ageArray["Ed"] = 77;
    print_r($ageArray);

    $donald = new Person("Donald","Trump", 72, "New York");
    print_r($donald);
}
?>
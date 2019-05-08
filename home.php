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

// For loop to add to different data
for ($i = 0; $i < 1; $i++){
    // Push new item to bikes variable and print result
    array_push($bikes, "KTM");
    echo print_r($bikes)."<br>";

    // Declare new key and value to ageArray variable and print result
    $ageArray["Ed"] = 77;
    echo print_r($ageArray)."<br>";

    // Instantiate new Person object and print result
    $donald = new Person("Donald","Trump", 72, "New York");
    echo print_r($donald)."<br>";
}

// If statement which has 20% chance to be executed
if(mt_rand(0,100) <= 20){
    // Variables to hold one random index/key of arrays
    $bikes_random = array_rand($bikes, 1);
    $ageArray_random = array_rand($ageArray, 1);
    // Converts object to array
    $arr_donald = (array)$donald;
    $person_random = array_rand($arr_donald, 1);

    // Changes random index/key value to 'edited'
    $bikes[$bikes_random] = "edited";
    $ageArray[$ageArray_random] = "edited";
    $donald->$person_random = "edited";

    // When executed print results
    echo print_r($bikes)."<br>";
    echo print_r($ageArray)."<br>";
    print_r($donald);
}
?>
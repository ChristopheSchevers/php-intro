<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();

// Array
$bikes = array("Kawasaki", "Yamaha", "Honda", "Suzuki", "Ducati","Benelli");

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
    // echo print_r($bikes)."<br>";

    // Declare new key and value to ageArray variable and print result
    $ageArray["Ed"] = 77;
    // echo print_r($ageArray)."<br>";

    // Instantiate new Person object and print result
    $donald = new Person("Donald","Trump", 72, "New York");
    // echo print_r($donald)."<br>";
}

// For loop to loop through all items random number of times (5-20)
$randomnumb = mt_rand(5,20);

for($i; $i < $randomnumb; $i++){
    // If statement which has 20% chance to be executed
    if(mt_rand(0,100) <= 20){
        // Variables to hold one random index/key of arrays
    $bikes_random = array_rand($bikes, 1);
    $ageArray_random = array_rand($ageArray, 1);
    // Converts object to array
    $arr_me = (array)$me;
    $me_random = array_rand($arr_me, 1);
    $arr_donald = (array)$donald;
    $donald_random = array_rand($arr_donald, 1);

    // Changes random index/key value to 'edited'
    $bikes[$bikes_random] = "edited";
    $ageArray[$ageArray_random] = "edited";
    $me->$me_random = "edited";
    $donald->$donald_random = "edited";
    }
}

// Divide array in half
$count = count($bikes);

if($count == 1){
    $bikes;
} elseif ($count%2 == 1) {
    $arr1 = array_slice($bikes,0,($count-1)/2);
    $arr2 = array_slice($bikes,($count-1)/2);
} else {
    $arr1 = array_slice($bikes,0,$count/2);
    $arr2 = array_slice($bikes,$count/2);
}

// Removes last item of associative array
end($ageArray);             // Move internal pointer to last item of array
$lastkey = key($ageArray);  // Get key of pointer
unset($ageArray[$lastkey]);

// Add arrays to object
$donald->arr1 = $arr1;
$donald->arr2 = $arr2;

// Loop through associative array to add to object
foreach($ageArray as $key => $value){
    $donald->$key = $value;
}

// Store object in cookie
$cookie_name = 'cookie';
$cookie_value = $donald;
setcookie($cookie_name,json_encode($cookie_value), time() + (86400 * 30), "/");
$cookieobj = json_decode($_COOKIE['cookie']);
?>

<pre>
    <?php
    print_r($bikes);
    print_r($ageArray);
    print_r($me);
    print_r($donald);
    print_r($_COOKIE);
    print_r($cookieobj);
    ?>
</pre>
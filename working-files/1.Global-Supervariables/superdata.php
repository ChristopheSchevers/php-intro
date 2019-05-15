<?php
session_start();

class Superdata{
    public $obj1;
    public $obj2;
    public $obj3;
    public $obj4;
}

class Toplists {
    public $data;
}

$data_object = unserialize($_SESSION['data_object']);
?>

<pre>
    <?php print_r($data_object); ?>    
</pre>
<?php
session_start();

$data_object = unserialize($_SESSION['data_object']);

echo $data_object->obj1;
// print_r($data_object);
?>
<?php
session_start();

include('home.php');

$player = new Blackjack;
$dealer = new Blackjack;

$_SESSION['player'] = $player;
$_SESSION['dealer'] = $dealer;
?>
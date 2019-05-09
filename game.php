<?php
include('home.php');

if(!isset($_SESSION['player'])) {
    $player = new Blackjack;
    $dealer = new Blackjack;

    $_SESSION['player'] = serialize($player);
    $_SESSION['dealer'] = serialize($dealer);
}

$player = unserialize($_SESSION['player']);
$dealer = unserialize($_SESSION['dealer']);

if($player->turn == true && $player->hand == null){
    for($i = 0; $i < 2; $i++){
        $player->Hit();
    }

    if($player->score == 21){
        $_SESSION['msg'] = "Blackjack! You win!";
    }

    $_SESSION['player'] = serialize($player);
}

if(isset($_POST['hit']) && $player->turn == true){
    $player->Hit();
    $_SESSION['player'] = serialize($player);
}

if(isset($_POST['stand'])){
    $player->Stand();
    $_SESSION['player'] = serialize($player);

    do{
        $dealer->Hit();
    } while($dealer->score < 15);
    $_SESSION['dealer'] = serialize($dealer);
}

if(isset($_POST['surrender'])){
    $player->Surrender();
    session_destroy();
}

if($player->score > 21) {
    $_SESSION['msg'] = "You lost";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
</head>
<body>
    <p><?php var_dump($player); ?></p>
    <p>Your hand: <?php foreach($player->hand as $value){echo $value." ";} ?></p>
    <p>Your score: <?php echo $player->score; ?></p>
    <p>Dealer hand: <?php foreach($dealer->hand as $value){echo $value." ";} ?></p>
    <p>Dealer score: <?php echo $dealer->score; ?></p>
    <form action="" method="POST">
        <input type="submit" name="hit" value="Hit">
        <input type="submit" name="stand" value="Stand">
        <input type="submit" name="surrender" value="Surrender">
    </form>
    <?php echo $_SESSION['msg']; ?>
</body>
</html>
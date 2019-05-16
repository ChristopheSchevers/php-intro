<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('security.php');
include('functions.php');


// Call nickname_generate function
if(isset($_POST['nickname-btn'])){
    $name = $_POST['nickname'];
    $styled_nickname = nickname_generate($name);
}

// Call object_generate function
if(isset($_POST['object-btn'])){
    $object = object_generate();
}

// Call object_revert function
if(isset($_POST['revert-btn'])){
    if(isset($object)){
        object_revert($object);
    } else {
        $object = object_revert(object_generate());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home page</title>
</head>
<body>
    <div class="container col-8 offset-2 my-5">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="card border border-dark m-3">
                        <div class="card-body d-flex align-items-center">
                            <form action="" method="post">
                                <button type="submit" class="btn btn-secondary" name="object-btn">Generate object</button>
                            </form>
                        </div>
                    </div>
                    <div class="card border border-dark m-3">
                        <div class="card-body d-flex align-items-center">
                            <form action="" method="post">
                                <button type="submit" class="btn btn-secondary" name="revert-btn">Revert object</button>
                            </form>
                        </div>
                    </div>
                    <div class="card border border-dark m-3">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <form action="" method="post">
                                <div class="form-group m-0">
                                    <input type="text" name="nickname" class="form-control text-center p-2 mb-3" required>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-secondary" name="nickname-btn">Get a nickname</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                if(isset($styled_nickname)){
                    echo '<div class="row justify-content-center my-4"><p>'.$styled_nickname.'</p></div>';
                }

                if(isset($object)){
                    echo '<div class="row justify-content-center m-4"><pre>';
                    print_r($object);
                    echo '</pre></div>';
                }
                ?>                
                
            </div>
        </div>
    </div>
    
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
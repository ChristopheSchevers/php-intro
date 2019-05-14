<?php
session_start();

if(isset($_POST['tvShows'], $_POST['movies'], $_POST['favCountry'], $_POST['worstMovie'])){
    $_SESSION['tvShows'] = $_POST['tvShows'];
    $_SESSION['movies'] = $_POST['movies'];
    $_SESSION['country'] = $_POST['favCountry'];
    $_SESSION['movie'] = $_POST['worstMovie'];
}

$movies = $_SESSION['movies'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Result page</title>
</head>
<body>
    <div class="container col-8 offset-2">
        <div class="card m-5">
        <h1 class="card-title text-center mt-4">Results</h1>
            <div class="card-body p-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="result.php" class="nav-link">Top 5 tv shows</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Top 5 movies</a>
                    </li>
                    <li class="nav-item">
                        <a href="result2.php" class="nav-link">Favorite country</a>
                    </li>
                    <li class="nav-item">
                        <a href="result3.php" class="nav-link">Worst movie</a>
                    </li>
                </ul>
                <div class="row mt-5 p-4 justify-content-center align-items-center">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col">Movie</th>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach($movies as $movie){
                                $i++;
                                echo '<tr><th scope="row">'.$i.'</th><td>'.$movie.'</td></tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form page</title>
</head>
<body>
    <div class="container col-8 offset-2">
        <div class="card m-5">
            <h1 class="card-title text-center mt-4">Setup</h1>
            <div class="card-body p-5">
                <form action="result.php" method="post">
                    <div class="form-group px-5 mb-4">
                        <label for="tvShows">Top 5 tv shows</label>
                        <input class="form-control p-2 my-2" type="text" name="tvShows[0]" required>
                        <input class="form-control p-2 my-2" type="text" name="tvShows[1]" required>
                        <input class="form-control p-2 my-2" type="text" name="tvShows[2]" required>
                        <input class="form-control p-2 my-2" type="text" name="tvShows[3]" required>
                        <input class="form-control p-2 my-2" type="text" name="tvShows[4]" required>
                    </div>
                    <div class="form-group px-5 mb-4">
                        <label for="movies">Top 5 movies</label>
                        <input class="form-control p-2 my-2" type="text" name="movies[0]" required>
                        <input class="form-control p-2 my-2" type="text" name="movies[1]" required>
                        <input class="form-control p-2 my-2" type="text" name="movies[2]" required>
                        <input class="form-control p-2 my-2" type="text" name="movies[3]" required>
                        <input class="form-control p-2 my-2" type="text" name="movies[4]" required>
                    </div>
                    <div class="form-group px-5 mb-4">
                        <label for="favCountry">Favorite country</label>
                        <input class="form-control p-2" type="text" name="favCountry" required>
                    </div>
                    <div class="form-group px-5 mb-4">
                        <label for="worstMovie">Worst movie</label>
                        <input class="form-control p-2" type="text" name="worstMovie" required>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-primary" type="submit" name="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
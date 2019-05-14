<?php
$array = [
    ["tv-show" => "Breaking Bad", "rating" => 5],
    ["tv-show" => "Dexter", "rating" => 4],
    ["tv-show" => "The Alienist", "rating" => 4],
    ["tv-show" => "Rick & Morty", "rating" => 5],
    ["tv-show" => "Bojack Horseman", "rating" => 4],
    ["tv-show" => "Mindhunter", "rating" => 4],
    ["tv-show" => "Hannibal", "rating" => 4],
    ["tv-show" => "Adventure Time", "rating" => 3],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Rating Loop</title>
</head>
<body>
    <div class="container col-8 offset-2">
        <div class="card m-5">
        <h1 class="card-title text-center mt-4">TV shows</h1>
            <div class="card-body p-5">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <th scope="col">#</th>
                        <th scope="col">TV show</th>
                        <th scope="col">Rating</th>
                    </thead>
                    <tbody>
                        <?php $n = 1; foreach($array as $row): ?>
                        <tr>
                            <th scope="row"><?php echo $n++; ?></th>
                            <td><a href="https://www.google.com/search?q=<?php echo str_replace('&','and',$row['tv-show']); ?>"><?php echo $row['tv-show']; ?></a></td>
                            <td>
                                <?php 
                                $s = $row['rating'];

                                for($i = 0; $i < $s; $i++){
                                    echo '<i class="fas fa-star"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
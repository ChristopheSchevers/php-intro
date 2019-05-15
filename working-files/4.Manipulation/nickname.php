<?php
// Takes in user input from form
$input = $_POST['nickname'];

$name = strrev(ucfirst(strrev(trim($input))));  // Capitalizes the last character of name
$randomIndex = randomIndex($name);
$randomChar = $name[$randomIndex];
$toggledCase = convertUpperLower($randomChar);
$arr = str_split($name);                        // Converts string to array
$arr[$randomIndex] = $toggledCase;              // Replaces character with the toggled case version
$newname = implode("",$arr);                    // Puts the array back to string

// Puts all data together in one output string
$output = "[".randomString(mt_rand(2,4))."]x".str_pad($newname, strlen($newname)+4, "--", STR_PAD_BOTH);

// Function to create random string with length between 2 and 4 characters
function randomString($length){
    $str = "";
    $chars = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($chars) -1;

    for($i = 0; $i < $length; $i++){
        $rand = mt_rand(0, $max);
        $str .= $chars[$rand];
    }

    return $str;
}

// Function to get random index from name
function randomIndex($n){
    $length = strlen($n) - 1;
    $index = mt_rand(0,$length);

    return $index;
}

// Function to convert character case
function convertUpperLower($c){
    if(ctype_upper($c)){
        return strtolower($c);
    } else {
        return strtoupper($c);
    }
}

$coloredName = colorSpan($output);

// Function to put each character in span element
function colorSpan($inputname){
    $arr = str_split($inputname);
    $newarr = [];

    $basecolor = [mt_rand(0,100),mt_rand(0,100),mt_rand(0,100)];    // Creates array with rgb values
    $colorIndex = mt_rand(0,2);                                     // Creates random index to pick r,g or b
    
    foreach($arr as $char){
        $basecolor[$colorIndex] += 10;      // Increases r,g or b value with each character in nickname

        $rgb = implode(",", $basecolor);    // Creates string to put between rgb parenthese in style attribute

        $char = '<span style="color: rgb('.$rgb.')">'.$char.'</span>';
        array_push($newarr, $char);
    }
    
    return implode("", $newarr);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nickname Generator</title>
</head>
<body>
    <div class="container col-8 offset-2">
        <div class="card m-5">
            <h1 class="card-title text-center mt-4">Nickname Generator</h1>
            <div class="card-body p-5">
                <form action="" method="post">
                    <div class="form-group px-5 mb-4">
                        <label for="nickname">Input nickname</label>
                        <input class="form-control p-2 my-2" type="text" name="nickname" pattern=".{1,}" required>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-primary" type="submit" name="submit-btn">Submit</button>
                    </div>
                </form>
                <p class="text-center mt-5"><?php echo $coloredName; ?></p>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
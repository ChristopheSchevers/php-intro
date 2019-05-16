<?php
function nickname_generate($nickname){
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

    // Function to put each character in span element and unique color
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

    // Main script
    $input = $nickname;

    $name = strrev(ucfirst(strrev(trim($input))));  // Capitalizes the last character of name
    $randomIndex = randomIndex($name);
    $randomChar = $name[$randomIndex];
    $toggledCase = convertUpperLower($randomChar);
    $arr = str_split($name);                        // Converts string to array
    $arr[$randomIndex] = $toggledCase;              // Replaces character with the toggled case version
    $newname = implode("",$arr);                    // Puts the array back to string

    // Puts all data together in one output string
    $output = "[".randomString(mt_rand(2,4))."]x".str_pad($newname, strlen($newname)+4, "--", STR_PAD_BOTH);

    $coloredName = colorSpan($output);

    return $coloredName;
}

function object_generate(){
    $obj = json_decode($_COOKIE['cookie']);
    return $obj;
}

function object_revert($obj){
    // Takes both arr arrays and merges them back into one array
    $bikes = array_merge($obj->arr1,$obj->arr2);
    // Removes both arr arrays from object
    unset($obj->arr1);
    unset($obj->arr2);

    $ageArray = [];
    
    foreach($obj as $key => $value){    // Loops through object
        // If key does not match original keys, key value pair will be pushed to array and will be removed from object
        if($key != 'firstname' && $key != 'lastname' &&$key != 'age' && $key != 'city'){
            $ageArray[$key] = $value;
            unset($obj->$key);
        }
    }
    // Store restored object, array and associative array into result array
    $result = array($obj,$bikes,$ageArray);

    return $result;
}
?>
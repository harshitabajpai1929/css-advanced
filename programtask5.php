<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5 if - else</title>
</head>
<body>
    <?php
    $marks= 90;
    if($marks >= 60)
    {
        $grade= "first division";
    }
    else if($marks >= 45){
        $grade= "second division";
    }
    else if($marks >= 33){
        $grade= "third division";
    }
    else if($marks < 33){
        $grade= "fail"; 
    }
    echo "student grade= $grade";
    ?>

</body>
</html>
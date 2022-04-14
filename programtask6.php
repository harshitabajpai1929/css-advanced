<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
    $day = 4;
    switch($day){
        case "1":
            echo "monday";
            break;
        case "2":
            echo "tuesday";
            break;
        case "3":
            echo "wednesday";
            break;
        case "4":
            echo "thursday";
            break;
        case "5":
            echo "friday";
            break;
        case "6":
            echo "saturday";
            break;
        case "7":
            echo "sunday";
            break;
        default:
            echo "invalid number";
        }
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <!-- programs -->
    <a href="programtask1.php">sub task 1</a>
    <a href="programtask2.php">sub task 2,3,4</a>
    <a href="programtask5.php">subtask 5</a>
    <a href="programtask6.php">subtask 6</a>
    <a href="programtask7.php">subtask 7</a>
    <a href="programtask8.php">subtask 8</a>

    <!-- exercise -->
    <?php
    echo "hello world";
    ?>
    <?php
    echo "<br>this is php";
    
   //this is a single line comment
   /*this is a multi
    line comment*/
    echo "<br>hi";
   ?>
   <?php
   $txt = "hello php";
   echo "<br>";
   $x = 5;
   $y = 7;
   echo $x+$y;
   echo "<br>";
   echo strlen("hello world");
   echo "<br>";
   echo strrev("hello php page");
   echo "<br>";
   $oldtxt = "welcome to my webpage";
   echo str_replace("webpage", "document", $oldtxt);
   echo "<br>";
   echo 10*5;
   echo "<br>";
   echo 10/2;
   echo "<br>";
   var_dump($x == $y);
   echo "<br>";
   var_dump($x != $y);
   echo "<br>";
   $a= 50;
   $b= 10;
   if($a > $b){
       echo "hi php";
   }
   echo "<br>";
   if($a != $b){
       echo "hey header";
   }
   echo "<br>";
   if($a == $b){
       echo "yes";
   }
   else {
      echo "no";
}
?>
<?php
echo "<br>";
   $c = 20;
   $d = 10;
   if($c == $d){
       echo "1";
   }
   else if($c > $d){
       echo "2";
   }
   else {
       echo "3";
   }
   echo "<br>";
   $i=1;
   while($i<6){
   echo "$i";
   $i++;
   }
   ?>
   <?php
   echo "<br>";
   $i=2;
   do{
       echo "$i";
       $i++;
   }while($i<6);
   echo "<br>";
   for($i=0;$i<10;$i++){
       echo "$i";
   }
   echo "<br>";
   $colors =array("red","green","pink","yellow");
   foreach ($colors as $x) {
       echo "<br>$x";
   }
   echo "<br>";
   function myFunction(){
       echo "hello footer";
   }
   myFunction();
   function myFun($x, $y){
       echo $x;
   }
   myFun(8,9);
   ?>
   <?php
    echo "<br>";
   function rFunction($fname, $lname){
       return $lname;
   }
   switch($color){
       case "red":
           echo "red";
           break;
       case "green":
           echo "green";
           break;
       default: 
       echo "neither";
       
   }
   ?>

</body>
</html>
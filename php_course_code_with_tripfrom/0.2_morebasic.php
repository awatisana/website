<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
</style>    
<style>
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
         margin:auto;
         padding:23px;
    }
    
</style>
<body>
    <div class="container">
        <h1>this is the containrtr</h1>
        <h2>lest start the party</h2>
        <br>
    <?php
    $age = 6;
    if($age>18){
        echo "you go to party";
    }
    else if($age==7){
        echo "you are 7 years old";
    }
    else if($age==6){
        echo "you are 6 year old";
   }
    else{
        echo "you can not go to the party";
    }

    $languages = array("python","c++","php","web");
    //echo count($languages);
   // echo $languages[0];
   //loops in php

   $a= 0;
   while($a <=20) {
    echo "<br> the value of a is :";
    echo $a;
    $a++;
   }
// iterating arrays in php using while loop
   $a= 0;
   while($a < count($languages)) {
    echo "<br> the value of a is :";
    echo $languages[$a];
    $a++;
   }
//do while
   $a= 200;
   do {
    echo "<br> the value of a is :";
    echo $a;
    $a++;
   }while ($a< 10);
   //for loop

   $a = 200;
   for ($a=60 ; $a <10; $a++){
    echo "<br>the valu of a  for loop is:";
    echo $a;
   }
 foreach ($languages as $value) {
    echo "<br> the value of forecch";
    echo $value;
 }
 function print5(){
    echo "FIVE";

 }
 print5();
 print5();
 print5();
 print5();

 function print_number($number){
    echo "<br>your number is";
    echo $number;
 }
 print_number(45);
 print_number(435);
 print_number(5);

?>


    
</body>
</html>
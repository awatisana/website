<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php course</title>
</head>
<body>
    <div class="container">
        my first php web pages
    <?php
    echo "this is your first web pages in php ";
    //screen alg
    /*

multiple line comment

//lorem344

    */
   /* $variable1=34;
    $variable2=45;
    echo"<br>";
    echo $variable1;
    echo $variable2;
    echo $variable1+$variable2;
    echo"<br>";
    //operators i php
    //arithmetic operators
    echo  "  the value of  varibles  +   varibles 2";
    echo "<br>";
    echo "<br>";
     echo  $variable1  +  $variable2;

     echo  "  the value of  varibles  -   varibles 2";
    echo "<br>";
    echo "<br>";
     echo  $variable1  -  $variable2;

     echo  "  the value of  varibles  *   varibles 2";
    echo "<br>";
    echo "<br>";
     echo  $variable1  *  $variable2;

     echo  "  the value of  varibles  /  varibles 2";
    echo "<br>";
    echo "<br>";
     echo  $variable1  /  $variable2;
//assignment operators

$newVar = $variable1;
//$newVar +=1;
//$newVar -=1;

$newVar *= 2;
$newVar /= 1;
echo "the value of new varibles is";
echo $newVar ;
echo"<br>";
//campare operater

echo"the value of 1==4";
echo var_dump(1==4);
echo"<br>";

echo"the value of 1!==4";
echo var_dump(1!==4);
echo"<br>";

echo"the value of 1>=4";
echo var_dump(1>=4);
echo"<br>";

echo"the value of 1<=4";
echo var_dump(1<=4);
echo"<br>";

//increment and decriment

echo --$variable1;
echo "<br>";
echo $variable1;
//logical operater

$myvar=(true) and (true)*/
$myvar=(true) and (false);
// echo "<br>";
echo var_dump($myvar);
     
   // ?>
    <?php
    define('PI3',3.14);
    echo "data types";



    //string;
    //integer
    //float
    //boolean
    //array
    //object
    echo "<br> data types <br>";
    $var = "this is A string";
    echo var_dump($var);
    echo"<br>";

    $var=67;
    echo var_dump($var);
    echo "<br>";
   
    $var=67.1;
    echo var_dump($var);
    echo "<br>";

    $var=true;
    echo var_dump($var);
    echo "<br>";
    echo PI3;
   
   

    ?>
    </div>
    
</body>
</html>
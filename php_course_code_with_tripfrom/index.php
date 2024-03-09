<?php
$insert = false;
if(isset($_POST['name'])){
    $submit = true;
    $server = "localhost";
    $username= "root";
    $password="";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to database failed due to ". mysqli_connect_error());
    }
    //echo "success connecting to the db";
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $desc= $_POST['desc'];
    $sql= "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc` ,`dt`) VALUES
    ('$name', '$age', '$gender', '$email', '$phone','$desc', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
       
    }

    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel from</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="_IMG_9881.jpg" alt="BGMIT Mudhol">
    <div class="container">
        <h1>WELCOM TO BGMIT MUDHOL US TRIP FROM </h1>
        <p><b>Enter Your Details and Submit This From to Confirm Your Participation in The Trip</b></p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'><i><b>Thanks for submitting your from. we are happy to see you joining us for the US trip</b></i></p>";
        }
    ?>    
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type=" text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name=" email" id="email" placeholder="Enter your Email Id">
            <input type="phone" name=" phone" id="phone" placeholder="Enter your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Information Here"></textarea>
            <button class="btn">Submit</button>
            
    </div>
    <script src="index.js"></script>

   
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uygulama2</title>

    <style>
        .mail{
            border:2px solid GoldenRod;
            width:300px;
            margin:0px;
        }
        .submit{
            width:100px;
            margin-top:10px;
            background-color: GoldenRod;
            color:#8B0000;

        }
        .container{
            margin:13% 32%;
            padding:0px;
            border:2px solid GoldenRod;
            background-color:black;
            text-align:center;
            width:500px;
            color:white;
        }
        .div_h1{
            color:#8B0000;
            background-color:GoldenRod;
            font-size:45px;
        }
        .div_h3{
            color:white;
            font-size:15px
        }
       
    </style>
</head>
<body>
    <div class="container"> 
        <h1 class="div_h1">MOVIES</h1>
    <?php
$con=mysqli_connect("localhost","root","","uygulama2");
?>

<form method="post" action="">
    <h3 class="div_h3">Inter your mail</h3>   
    <input type="mail" class="mail" name="yourmail">
     <h3 class="div_h3"> Inter your password </h3> 
    <input type="password" class="mail" name="yourpassword"> <br>
     <input type="submit" class="submit" name="submit" value="submit">
</form>


<?php

if(isset($_POST['submit'])){
    $mail=$_POST['yourmail'];
    $password=$_POST['yourpassword'];
    $sql="INSERT INTO info2 (mail,password) VALUES('$mail','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "saved sucessfully";
    }
    else{
        die ("error".mysqli_error($con));
    }
}


?>
    </div>

</body>
</html>


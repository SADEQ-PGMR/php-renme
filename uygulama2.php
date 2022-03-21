<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>uygulama2</title>
    <style>
        .mail{
    border:2px solid GoldenRod;
    border-radius:10px;
    width:300px;
    margin:0px;
}
.submit{
    width:100px;
    margin-top:10px;
    margin-bottom:10px;
    background-color: GoldenRod;
    color:#8B0000;
    border-radius:10px;
    border:2px solid white;

}
.container{
    margin:10% 32%;
    padding:0px;
    border:2px solid GoldenRod;
    background: url('backflower.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;
    width:500px;
    color:white;
    position:fixed;

}
.div_h1{
    color:#8B0000;
    background-color:GoldenRod;
    font-size:45px;
}
.div_h3{
    color:white;
    font-size:45px;;
    font-size:15px;
    text-align:left;
    padding:0px 100px;
}

    </style>

</head>
<body>
    <header class="header">
        <h1 class="header_h1">MOVIES</h1>
        <nav class="header_nav">
            <ul class="nav_ul"> 
                <li class="nav_li"><a href="#" class="nav_a">Home</a></li>
                <li class="nav_li"><a href="#" class="nav_a">Movies</a></li>
                <li class="nav_li"><a href="#" class="nav_a">Series</a></li>
                <li class="nav_li"><a href="#" class="nav_a">Chaild movies</a></li>
            </ul>
        </nav>


    </header>
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


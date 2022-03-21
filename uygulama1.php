<?php
$con = mysqli_connect("localhost", "root", "", "info");
if ($con) {
    echo "connected";
} else {
    die("error" . mysqli_connect_error());
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <br> INter your name <br>
    <input type="text" name="yourname">
    <br> INter your age <br>
    <input type="number" name="age">
    <input type="submit" name="submit" value="submit">
</form>

<?php

if (isset($_POST["submit"])) {
    $name = $_POST["yourname"];
    $age = $_POST["age"];

    $sql = "INSERT INTO uygulama1 (name, age) VALUES ('$name', '$age')";

    $result = mysqli_query($con, $sql);
    //print_r($result);
    //print_r($_POST);
    if ($result) {
        echo "saved sucessfully";
    } else {
        die("ERROR" . mysqli_error($con));
    }
}

?>
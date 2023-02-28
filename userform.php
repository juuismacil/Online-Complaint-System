<?php
include "connect.php";
if(isset($_POST["submit"])){
    $username =$_POST["username"];
    $email =$_POST["email"];
    $number =$_POST["number"];


    $userQuery = "insert into message(Username,Email,Number)
    values('$username','$email','$number')";
    $result =$dbconnection->query($userQuery ) ;
    if(  $result){
        echo "one user has been register";
    }
}
    else{
        echo $dbconnection->connect_error;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<div class="form">
        <form method="post">
            <input type="text" placeholder="Enter Your UserName" name="username"> <br> <br>
            <input type="text" placeholder="Enter Your Email" name="email"> <br> <br>
            <input type="text" placeholder="Enter Your Number" name="number"> <br> <br>
            <input type="submit" value="Submit" name="submit" class="sub">
        </form>

    </div>

</body>
</html>
<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input required type="username" name="username" placeholder="enter username">
        <br>
        <input required type="email" name="email"placeholder="enter email">
<br>
    <input required type="password" name="password" placeholder="enter password">
    <br>
    <button name="register" type="submit">register</button>
    </form>
    <?php
    if(isset($_POST['register']))
    {
        $username= $_POST["username"];
        $email= $_POST["email"];
        $password= $_POST["password"];
        $q="insert into register(username,email,password) values('".$username."','".$email."','".$password."')";
       
        mysqli_query($con,$q); 
    };
    ?>
</body>
</html>
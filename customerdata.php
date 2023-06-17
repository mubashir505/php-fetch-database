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
<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
    </tr>
    <?php
    $q="select * from register";
    $data = mysqli_query($con,$q);
    while($r=mysqli_fetch_array($data))
    {
        ?>
        <tr>
         <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['username'] ?></td>
        <td><?php echo $r['password'] ?></td>
        </tr>

        <?php
    }
    
    ?>
</table>    

</body>
</html>
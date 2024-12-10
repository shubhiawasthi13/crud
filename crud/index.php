<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>CRUD IN PHP</h2>
    <table border=1>
        <tr>
            <td colspan =5><a href ="adduser.php">Add User</a></td>
        </tr>
        <tr>
        <td><b>#</b></td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Gender</b></td>
        <td><b>Action</b></td>       
        </tr>
        <?php
        require 'config.php';
        $rows = mysqli_query($conn, "SELECT * FROM user");
        $i = 1;
        ?>
        <?php
        foreach($rows as $row):?>
        <tr id = <?php echo $row['id'];?>>
            <td><?php $i++;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td>
                <a href="viewuser.php?id=<?php echo $row['id'];?>">View</a>||
                <a href="edituser.php?id=<?php echo $row['id'];?>">Edit</a>||
                <button type="button" onclick="submitData(<?php echo $row['id'];?>)">Delete</button>
            </td>

        </tr>
        <?php endforeach;?>
    </table>
    <?php require 'script.php';?>
</body>
</html>
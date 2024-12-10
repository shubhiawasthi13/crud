<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="post">
        <?php
        require 'config.php';
        $id = $_GET['id'];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id ='$id'"));
        ?>
        <input type="hidden" id ='id' value ="<?php echo $rows['id'];?>">
        <br>
        <label for="">Name</label>
        <br>
        <input type="text" id="name" value="<?php echo $rows['name']; ?>">
        <br>
        <label for="">Email</label>
        <br>
        <input type="email" id="email" value="<?php echo $rows['email']; ?>">
        <br>
        <select name="" id="gender">
            <option value="Male" <?php if($rows['gender'] == "Male") echo "selected";?>>Male</option>
            <option value="Female" <?php if($rows['gender'] == "Female") echo "selected";?>>Female</option>
        </select>
        <br><br>
        <button type ="button" onclick ="submitData('edit');">Update</button>
        <br><br>
        <a href="index.php">Go to Index</a>

    </form>
    <?php require 'script.php';?>
    
</body>
</html>
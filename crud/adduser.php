<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add User</h2>
    <form action="" method="post">
        <label for="">Name:</label>
        <br>
        <input type="text" id="name">
        <br>
        <label for="">Email:</label>
        <br>
        <input type="email" id="email">
        <br>
        <label for="">Gender:</label>
        <br>
        <select name="" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <br>
        <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go to Index</a>
    <?php require 'script.php';?>
</body>
</html>
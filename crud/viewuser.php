<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Data</h2>
    <?php
    require 'config.php';
    $id = $_GET['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id ='$id'"));
    ?>

    <table border =1>
        <tr>
            <td>ID</td>
            <td><?php echo $rows['id'];?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $rows['name'];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $rows['email'];?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $rows['gender'];?></td>
        </tr>
    </table>

    <br>
    <a href="index.php">Go to Index</a>
</body>
</html>
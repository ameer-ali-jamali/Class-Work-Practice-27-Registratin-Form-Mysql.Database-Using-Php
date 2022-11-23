<?php
include_once "conn.php";
include_once "code.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            background-color: darkseagreen;
            font-size: xxx-large;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $_POST['email'];
        $sql = "SELECT * FROM `tab` WHERE email='$email'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
    }
    echo  "<h1>$row[name]</h1>";
    ?>

</body>

</html>
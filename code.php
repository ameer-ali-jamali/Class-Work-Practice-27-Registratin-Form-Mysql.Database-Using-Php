<?php
include_once "conn.php";

function hash_pass($originalPassword)
{
    return md5($originalPassword);
}

// Signup Data To Database  ...

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    $md5_re_pass = hash_pass($_POST['re_pass']);
    $query = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$md5_pass','$md5_re_pass')";
    try {
        $result = mysqli_query($conn, $query);
    } catch (Exception $ex) {
        die("<script>
                alert(' This Email Already Exists Please Try Other One ');
                window.location = 'index.php';
                </script>");
    }
    if ($result != false) {
        die("<script>
            alert('Your Data Submited Successfully  => ( $name = $email = Password ( ********* ) ) !!');
            window.location = 'index.php';
            </script>");
    } else {
        die("<script>
                alert('Server Error');
                window.location = 'index.php';
                </script>");
    }
}


// Login ...


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    $sql = "SELECT * FROM `tab` WHERE email='$email' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row == true) {
        $md5_pass;
        $sql = "SELECT * FROM `tab` WHERE password='$md5_pass' ";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if ($row == true) {
            die("<script>
                        alert(' Wellcome =>  $row[name] ');
                        window.location = 'success.html';
                        </script>");
        } else {
            echo "<script>
                    alert('Incorrect Password !!');
                    window.location = 'index.php';
                    </script>";
        }
    } else {
        die("<script>
                alert(' Incorrect Email ');
                window.location = 'index.php';
                </script>");
    }
}


// Update Data From Database ...

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    $sql = "SELECT * FROM `tab` WHERE email='$email'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row == true) {
        $name;
        $email;
        $md5_pass;
        $sql = "SELECT * FROM `tab` WHERE password='$md5_pass' ";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row == true) {
            $query = "UPDATE tab SET name='$name' WHERE  email='$email' ";
            $result = mysqli_query($conn, $query);
            die("<script>
                    alert('Your Name Updated Success fully => ( $name ) !!');
                    window.location = 'index.php';
                    </script>");
        } else {
            die("<script>
                alert('Incorrect Password !!');
                window.location = 'index.php';
                </script>");
        }
    } else {
        die("<script>
                alert(' Incorrect Email ');
                window.location = 'index.php';
                </script>");
    }
}


// Delete Data From Database ...

if (isset($_POST['delete'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    $sql = "SELECT * FROM `tab` WHERE email='$email'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row == true) {
        $name;
        $email;
        $md5_pass;
        $sql = "SELECT * FROM `tab` WHERE password='$md5_pass' ";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row == true) {
            $delete = "DELETE FROM tab WHERE password='$md5_pass'";
            $result = mysqli_query($conn, $delete);
            die("<script>
                alert('Your Data Deleted Success fully');
                window.location = 'index.php';
                </script>");
        } else {
            die("<script>
                alert('Incorrect Password');
                window.location = 'index.php';
                </script>");
        }
    } else {
        die("<script>
                alert(' Incorrect Email ');
                window.location = 'index.php';
                </script>");
    }
}



?>
<?php

?>
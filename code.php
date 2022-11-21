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
    if ($md5_pass == $md5_re_pass) {
        $query = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$md5_pass','$md5_re_pass')";
        try {
            $result = mysqli_query($conn, $query);
        } catch (Exception $ex) {
            die("<script>
                alert('This Email Already Exists Please Try Other Email ) !!');
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
                alert('This Email Already Exists Please Try Other Email ) !!');
                window.location = 'index.php';
                </script>");
        }
    } else if ($pass != $md5_re_pass || $md5_re_pass != $md5_pass) {
        die("<script>
            alert('Your Password Coudnt Macth => ( $md5_pass == $md5_re_pass )!!');
            window.location = 'index.php';
            </script>");
    } else {
        die("<script>
        alert('Password Coudnt Macth => Try Again');
        window.location = 'index.php';
        </script>");
    }
}


// Login ...
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    if ($email and $md5_pass == true) {
        $sql = "SELECT * FROM `tab` WHERE email='$email' AND password='$md5_pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if ($row != null) {
            die("<script>
                alert(' Wellcome =>  $row[name] ');
                window.location = 'success.html';
                </script>");
        } else {
            echo "<script>
            alert('Incorrect Email or Password !!');
            window.location = 'index.php';
            </script>";
        }
    } else {
        die("<script>
        alert('!! Empty Value  => ($email = $md5_pass) !!');
        window.location = 'index.php';
        </script>");
    }
}


// Update Data From Database ...

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    if ($name and $email and $md5_pass == true) {
        $sql = "SELECT * FROM `tab` WHERE email='$email' AND password='$md5_pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if ($row != null) {
            $query = "UPDATE tab SET name='$name' WHERE  email='$email' ";
            $re = mysqli_query($conn, $query);
            echo "<script>
                alert('Your Name Updated Success fully => ( $name ) !!');
                window.location = 'index.php';
                </script>";
            die();
        } else {
            echo "<script>
            alert('Incorrect Email or Password !!');
            window.location = 'index.php';
            </script>";
        }
    } else {
        die("<script>
        alert('Please Fill Update Form  => ( $name = $email = $md5_pass ) !!');
        window.location = 'index.php';
        </script>");
    }
}


// Delete Data From Database ...

if (isset($_POST['delete'])) {
    if ($_POST == true) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $md5_pass = hash_pass($_POST['pass']);
        if ($name && $email && $md5_pass == true) {
            $delete = "DELETE FROM tab WHERE name='$name' and email='$email' and  password='$md5_pass'";
            $result = mysqli_query($conn, $delete);
            if ($result > 0) {
                die("<script>
            alert('Your Data Deleted Success fully  => ( $name = $email = $md5_pass ) !!');
            window.location = 'index.php';
            </script>");
            }
            if ($result < 1) {
                die("<script>
            alert('Some Error Try Again Later !!');
            window.location = 'index.php';
            </script>");
            }
        } else {
            die("<script>
            alert('Please Fill This Form  => ( $name = $email = $md5_pass ) !!');
            window.location = 'index.php';
            </script>");
        }
    }
}








?>
<?php

?>
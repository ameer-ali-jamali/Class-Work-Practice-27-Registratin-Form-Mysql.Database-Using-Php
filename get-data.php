<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    $select = "SELECT * FROM tab ";
    $result = mysqli_query($conn, $select);
    echo "<h1 class=table-heading > New  Students  Registraions </h1>";
    echo "<div class = container-fluid table-container>";
    echo "<table class='table table-sm  table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Id</th>";
    echo "<th scope='col'>Name</th>";
    echo "<th scope='col'>Email</th>";
    echo "<th scope='col'>Password</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th>$data[id]</th>";
        echo "<td>$data[name]</td>";
        echo "<td>$data[email]</td>";
        echo "<td>$data[password]</td>";
        echo '<td> <form method="post">
    <input type="hidden" name="id" value=' . $data['id'] . '>
    <input type="submit" name="update_by_id" id="update_by_id">
    <input  type="submit" class="btn btn-sm btn-info" onclick="confirm_update()" value="Update">
    </form>
    </td>';
        echo '<td> <form method="post">
    <input type="hidden" name="id" value=' . $data['id'] . '>
    <input type="submit" name="delete_by_id" id="delete_by_id">
    <input  type="submit" class="btn btn-sm btn-danger" onclick="confirm_delete()" value="DELETE">
    </form>
    </td>';
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    ?>

</body>

</html>
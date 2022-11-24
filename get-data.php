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
echo "<th scope='col'></th>";
echo "<th scope='col'></th>";
echo "<th scope='col'></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<th>$data[id]</th>";
    echo "<td>$data[name]</td>";
    echo "<td>$data[email]</td>";
    echo '<td> <form method="post">
    <input type="hidden" name="id" value=' . $data['id'] . '>
    <input type="hidden" name="edit_by_id" id="edit_by_id" >
    <input  type="submit" class="btn btn-sm btn-success" onclick="confirm_edit()" value="Edit">
    </form>
    </td>';
    echo '<td> <form method="post">
        <input type="hidden" name="id" value=' . $data['id'] . '>
        <input type="hidden" name="update_by_id" id="update_by_id" >
        <input  type="submit" class="btn btn-sm btn-primary" onclick="confirm_update()" value="Update">
        </form>
        </td>';
    echo '<td> <form method="post">
            <input type="hidden" name="id" id="id" value=' . $data['id'] . '>
            <input type="hidden" name="delete_by_id" id="delete_by_id" >
            <input  type="submit" class="btn btn-sm btn-danger" onclick="confirm_delete()" value="DELETE">
            </form>
            </td>';
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

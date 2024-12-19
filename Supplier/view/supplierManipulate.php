<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item Manipulate</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>
<body>
<?php
session_start();

if ($_SESSION['roles'] === 'supplier') {

    echo '<table>
    <tr>

    
    <td>
    <h2>Create Item</h2>
    <form method="POST" action="../controller/supplier_dashpro.php">
    Item Name: <input type="text" name="taskName" required><br>
    Item Price: <input type="text" name="assignedTo" required><br>
    <input type="submit" name="createTask" value="Create Item">
    </form>
    </td>

    
    <td>
    <h2>Edit Item</h2>
    <form method="POST" action="../controller/supplier_dashpro.php">
    Item Name: <input type="text" name="taskName" required><br>
    New Item Name: <input type="text" name="newTaskName" required><br>
    Item Price: <input type="text" name="assignedTo" required><br>
    <input type="submit" name="editTask" value="Edit Item">
    </form>
    </td>

    
    <td>
    <h2>Delete Item</h2>
    <form method="POST" action="../controller/supplier_dashpro.php">
    Item Name: <input type="text" name="taskName" required><br>
    <input type="submit" name="deleteTask" value="Delete Item">
    </form>
    </td>

    </tr>
    </table>';

    echo '<td>';
        include '../controller/assigneditem.php';
    echo '</td>';
    echo '<br>';
    echo '<br>';

    

    echo '<a href="../view/supplier_dash.php">Dashboard</a><br>';
} else {
    echo 'Access denied. Please log in with a valid role.';
}
?>
</body>
</html>
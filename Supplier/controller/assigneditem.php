<?php
include '../Model/mydb.php';

$myDB = new myDB();
$conobj = $myDB->openCon();

echo '<h2>Entered Items</h2>';

$tablename = 'tasks';
$tasks = $myDB->getAllTasks($conobj, $tablename);

if ($tasks && $tasks->num_rows > 0) {
    echo '<ul>';
    while ($row = $tasks->fetch_assoc()) {
        echo '<li>' . $row['taskName'] . ' Price is: ' . $row['assignedTo'] . ' Tk '. '</li>';
    }
    echo '</ul>';
} else {
    echo 'No tasks have been assigned yet.';
}

$myDB->closeCon($conobj);
?>

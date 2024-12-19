<!DOCTYPE html>
<html lang="en">

<head>
    <title>Supplier Page</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['roles'] === 'supplier') {
        echo '<h1>Welcome to the Supplier Page</h1>
        <h3>Hello, ' . $_SESSION['name'] . '!</h3>
        <a href="./supplierManipulate.php">Supplier Operations</a><br>
        <a href="./supplier_Editpass.php">Change Password</a><br>
        <a href="./supplier_Editprof.php">Update Profile</a><br>';
       
                
        echo '<table>
              <tr>';
        echo '<td>';
        
        echo '</td>';        
        echo '<td>';
       
        echo '</td>';

        echo '<td>';
        
        echo '</td>';

        echo '</tr>';
        echo '</table>';

        echo '<form method="POST" action="../controller/supplier_dashpro.php">        
              <input type="submit" name="logout" value="Log Out">      
              </form>';
    } else {
        echo 'Access denied. Please log in with a valid role.';
    }
    ?>
</body>

</html>

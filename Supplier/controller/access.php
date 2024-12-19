<!DOCTYPE html>
<html lang="en">
<head>
      <title>Access Center</title>
</head>
<body>
<?php
    session_start();
    var_dump($_POST['roles']);
    var_dump($_SESSION['roles']);

    if (isset($_COOKIE['session_cookie'])) {
        
        $_SESSION['roles'] = $_COOKIE['session_cookie'];
                
        switch ($_SESSION['roles']) {
            
            case "supplier":
                header ("Location: ../view/supplier_dash.php");
                break;
            
        }
    } else {
        echo 'Access denied. Please log in with a valid role......';
    }

//######################  NOrmal LOgin

    if (isset($_SESSION['roles'])) {
        
        switch ($_SESSION['roles']) {
           
            case 'supplier':
                header ("Location: ../view/supplier_dash.php");
                break;
           
        }
    } else {
        echo 'Access denied. Please log in with a valid role......';
    }

    ?>
</body>
</html>
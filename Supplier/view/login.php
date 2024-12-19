<!DOCTYPE html>
<?php include '../controller/login_process.php';?>
<html lang="en">
	<head>
		<title>Sign Up</title>
    </head>
<body>
<center>
	
 	<form method="post" action="">
			
			<h2>Log In</h2><br>
                	
						
				<table>
					<tr>
						<td>User Name: <input type="text" name="uname"></td>
						
					</tr>

					<tr>
						<td>Password: <input type="password" name="password"></td>
						 
					</tr>
                    <tr>
						<td>
                        <p>Registration a acoount?<a href="registration.php">Sign Up!</a></p><br>
                        </td>
                    </tr>
				</table>
				<input type="checkbox" name="remember_me"> Remember me<br><br>
				

				<input type="submit" name="submission" value="Log In">
               
                
			
		</form>
	
		</center>
</body>
</html>

		
<!DOCTYPE html>
<script src="../js/myscript.js"></script>
<html lang="en">
<head>
    <title>Registration</title>
</head>

<body>
<center>
<h1>Please provide your informations</h1>
<form action="../controller/registrationCon.php" method="POST" onsubmit="return validation()">
<table>
<tr>
                <td>
                    Name:<input type="text" name="sname" id="sname">
                </td>
                <td>
                   
                </td>
                <td
                    id="snameerror">
                </td>
</tr>
<tr>
                <td>
                    Email Address:<input type="text" name="emailAddress" id="emailAddress">
                </td>
                <td>
                    
                </td>
                <td
                    id="emailerror">
                </td>
</tr>
<tr>
                <td>
                    username:<input type="text" name="uname" id="uname">
                </td>
                <td>
                  
                </td>
                <td
                    id="unameerror">
                </td>
</tr>
<tr>
                <td>
                    Password:<input type="password" name="password" id="password">
                </td>
                <td>
                    
                </td>
                <td
                    id="passworderror">
                </td>
</tr>
<tr>
                <td>
                    Date of Birth :<input type="date" name="dOb" id="dOb">
                </td>
                <td>
                   
                </td>
                <td
                    id="doberror">
                </td>
</tr>
<tr>
                <td>
                    Roles:<select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other"> Other</option>
                    </select>
                </td>
                <td>
                    
                </td>
                <td
                    id="gendererror">
                </td>
</tr>
<tr>
                <td>
                    Roles:<select id="roles" name="roles">
                    <option value="supplier">Supplier</option>
                    </select>
                </td>
                <td>
                   
                </td>
                <td
                    id="roleserror">
                </td>
</tr>
<tr>
                <td>
                    Phone Number:<input type="text" name="phnumber" id="phnumber">
                </td>
                <td>
                    
                </td>
                <td
                    id="phnumbererror">
                </td>
</tr>
<tr>
                <td>
                    Address:<input type="text" name="address" id="address">
                </td>
                <td>
                 
                </td>
                <td
                    id="addresserror">
                </td>
</tr>

<tr>
                <td>
                    <input type="submit" name="submit">
                </td>
</tr>
<tr>
                <td>
                    <input type="reset" name="reset">
                </td>
</tr>
<tr>
    <td>
         <p>Already have a account?<a href="login.php">Sign In</a> </p>
    </td>
</tr>
</center>
</body>
</html>
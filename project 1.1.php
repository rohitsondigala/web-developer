<!DOCTYPE html>

<?php
include("connection.php");
error_reporting(0);
?>


<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:20px;
}

#button
{
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
}

body
{
background:linear-gradient(red,blue);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br>

<form>


<tr>
<td>Last Name</td>
<td><input type="text" placeholder="Last Name" name="lname" required></td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="text" placeholder="Email Address" name="dname" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" placeholder="Password" name="cname" required></td>
</tr>


<tr>
<td colspan="2" item-align="center"><a href ="login.html"><input type="submit" name="submit" id="button"></a></td>
</tr>
</form>
</table>
</body>
</html>

<?php



$fn=$_GET['fname'];
$ln=$_GET['lname'];
$dn=$_GET['dname'];
$cn=$_GET['cname'];



$query = "INSERT INTO TRYIT1 VALUES ('$fn','$ln','$dn','$cn')";

$data = mysqli_query($conn,$query);

if($data)
{
  echo "ok bro";
}
else
{
  echo "no bro";
}



?>

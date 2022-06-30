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
border-radius:10px;
background-color: #202020;
display: block;
  margin-left: auto;
  margin-right: auto;
  width: 345px;

}

#button
{
background-color:#35a4ff;
border: none;
color: white;
font-size: 11px;
height:25px;
width:85px;
border-radius:25px;
}

#hoka{
  background-color: #b1e2ff;
  text-decoration: none;
  border: none;
  padding: 8px;
  border-radius: 25px;
  text-align: center;
  color: black;
  outline: none;
  font-size: 14px;
}

</style>

</head>

<body style="background-color: rgb(79, 176, 255);font-family: Verdana, Geneva, Tahoma, sans-serif;">
<br><br><br><br><br><br><br>

<h1 style="text-align: center;">instagram</h1>

<form>
<table style="item-align:center;"  cellspacing="20">

<tr>
<td>First Name</td>
<td><input type="text" id="hoka" placeholder="First Name" name="fname" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" id="hoka" placeholder="Password" name="cname" required></td>
</tr>



<tr>
<td colspan="2" item-align="center"><a href ="login.html"><input type="submit" name="submit" id="button"></a></td>
</tr>
</form>
</table>


<P style="text-align: center;font-size: 13px;">YOUR SMILE :) IS OUR STREGTH</P>


</body>
</html>

<?php



$fn=$_GET['fname'];
$cn=$_GET['cname'];



$query = "INSERT INTO DATABETA VALUES ('$fn','$cn')";

$data = mysqli_query($conn,$query);

?>
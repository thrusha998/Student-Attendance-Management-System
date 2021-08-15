
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
        <title> attendance</title>
</head>


<style>
body { 
background : url("bank27.jpg");
background-repeat:no-repeat;
 background-size: 100%;



}
input[type=submit] {
	position:left;
    width: 10%;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: green;
    border: none;
    color: black;
	}
	

	
	


</style>




















<body>
<form action="insertatt.php" method="get">
<input type="radio" name="subject" value="me"> ME
<input type="radio" name="subject" value="dbms">dbms
<input type="radio" name="subject" value="unix">unix
<input type="radio" name="subject" value="co">co


<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
//$get_usn=$_SESSION['usn'];
$query="select * from student ";

$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$sid=$row[0];	
$usn=$row[1];
$sname=$row[2];









echo "<tr>
<br><td>".$sid."</td>
<td>".$usn."</td>
<td>".$sname."</td>
<td>
<input type='checkbox' name='attendence[]' value='$sid'></td>
</tr>";






}






?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
</form>


</body>
</html>
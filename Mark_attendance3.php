<?php
 include 'copyrights.php'; ?>

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

input[type=button] {
    width: 10%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	

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


<div>
Click here for &nbsp&nbsp
<input type="button" color="black"  value=" SEARCH" onclick="fun1()"/>
<script> function fun1() { window.location="Attendance_search3.php"; } </script></br>
</div>















<body>
<table border=5>
<form action="testing3.php" method="get">
<input type="radio" name="subject" value="ds"> DS
<input type="radio" name="subject" value="ade">ADE
<input type="radio" name="subject" value="dms">DMS
<input type="radio" name="subject" value="mathematics">MATHEMATICS


<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
//$get_usn=$_SESSION['usn'];
$query="select * from student where sem=3";

$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$sid=$row[0];	
$usn=$row[1];
$sname=$row[2];









echo "<tr>
<br><th>".$sid."</th>
<th>".$usn."</th>
<th>".$sname."</th>
<td>
<input type='checkbox' name='attendence[]' value='$sid'></td>
</tr>";






}






?>

</table>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  > </br>
</form>


</body>
</html>
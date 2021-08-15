
<?php
 include 'copyrights.php'; ?>

<style type='text/css'>
body { 
background : url("fsrc.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}
th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
input[type=button] {
    width: 30%;
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
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 100px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE SEARCH PAGE..!</strong></b></font></marquee>
<body background="" style="background-color:white"></body>

<div>
<form action="Attendance_search1.php" method="get"><br/><br/>

<b>Search for the  date here: </b><input type="date" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>



</div>



</form>




</body>
</html>

<?php
session_start();

if(!($_SESSION['fname']))
{
header("location: Mark_attendance1.php");
}

$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query="select * from attendance1 where dat = '$search_value'and sem=1";

$run = mysqli_query($con,$query);
if(mysqli_num_rows($run)==0)
{
echo "<script> alert('Entered date not found') </script>";
exit();
}
else
{
	
?>

<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> sid </th>
   <th>usn</th>
   <th>sname</th>
   <th>sem</th>
   <th>branch</th>
   <th>subject</th>
   <th>date</th>
   <th>time</th>
   <th>entry</th>
   
   </tr>
<?php

while($row=mysqli_fetch_array($run))
{
$sid=$row[1];
$usn=$row[2];
$sname=$row[3];
$sem=$row[4];
$branch=$row[5];
$subject=$row[6];
$dat=$row[7];
$time=$row[8];
$entry=$row[9];
?>


<tr align='center' bgcolor='cream'>
<td>   <?php echo $sid; ?></td>
<td>   <?php echo $usn; ?> </td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $subject; ?> </td>
<td>   <?php echo $dat; ?> </td>
<td>   <?php echo $time; ?> </td>
<td>   <?php echo $entry; ?> </td>
</tr>

<?php
}
}
}
?>
 <a href="Mark_attendance.php"><h1>Click here to Go Back</h1></a> 
</html>
